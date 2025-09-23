<?php

namespace App\Filament\Resources\Projects\RelationManagers;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\CreateAction;
use Filament\Actions\AttachAction;
use Filament\Forms\Components\Select;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Actions\DetachAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\DeleteBulkAction;
use App\Models\Feature;
use Filament\Forms;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FeaturesRelationManager extends RelationManager
{
    protected static string $relationship = 'features';

    protected static ?string $title = 'Fitur';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Fitur')
                    ->required()
                    ->maxLength(255),
                TextInput::make('price')
                    ->label('Harga')
                    ->required()
                    ->numeric()
                    ->prefix('Rp')
                    ->minValue(0)
                    ->formatStateUsing(fn ($state) => number_format($state, 2, ',', '.')),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->nullable()
                    ->rows(4),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Fitur')
                    ->searchable(),
                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR', true)
                    ->sortable(),
                // Tables\Columns\TextColumn::make('description')
                //     ->label('Deskripsi')
                //     ->limit(50)
                //     ->tooltip(fn ($record) => $record->description),
                BooleanColumn::make('pivot.is_completed')
                    ->label('Selesai')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->sortable(),
            ])
            ->filters([
                Filter::make('price')
                    ->schema([
                        TextInput::make('min_price')
                            ->label('Harga Minimum')
                            ->numeric(),
                        TextInput::make('max_price')
                            ->label('Harga Maksimum')
                            ->numeric(),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when($data['min_price'], fn (Builder $q) => $q->where('price', '>=', $data['min_price']))
                            ->when($data['max_price'], fn (Builder $q) => $q->where('price', '<=', $data['max_price']));
                    }),
                SelectFilter::make('is_completed')
                    ->label('Status Selesai')
                    ->options([
                        '1' => 'Selesai',
                        '0' => 'Belum Selesai',
                    ])
                    ->query(fn (Builder $query, array $data) => $query->when(
                        $data['value'] !== null,
                        fn (Builder $q) => $q->wherePivot('is_completed', $data['value'])
                    )),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Tambah Fitur Baru')
                    ->after(function ($livewire, $record) {
                        $livewire->ownerRecord->update([
                            'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                        ]);
                    }),
                AttachAction::make()
                    ->label('Tambah Fitur Existing')
                    ->recordSelect(
                        fn ($livewire) => Select::make('recordId')
                            ->label('Fitur')
                            ->options(
                                Feature::whereDoesntHave('projects', fn (Builder $query) => $query->where('projects.id', $livewire->ownerRecord->id))
                                    ->selectRaw('id, CONCAT(name, " - Rp ", FORMAT(price, 2, "id_ID")) AS name_price')
                                    ->pluck('name_price', 'id')
                            )
                            ->searchable()
                    )
                    ->after(function ($livewire, $data) {
                        $livewire->ownerRecord->update([
                            'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                        ]);
                    }),
            ])
            ->recordActions([
                EditAction::make()
                    ->after(function ($livewire, $record) {
                        $livewire->ownerRecord->update([
                            'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                        ]);
                    }),
                Action::make('toggle_completed')
                    ->label('Toggle Selesai')
                    ->action(function ($record, $livewire) {
                        $livewire->ownerRecord->features()->updateExistingPivot($record->id, [
                            'is_completed' => !$record->pivot->is_completed,
                        ]);
                    })
                    ->icon(fn ($record) => $record->pivot->is_completed ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle')
                    ->color(fn ($record) => $record->pivot->is_completed ? 'danger' : 'success'),
                DetachAction::make()
                    ->after(function ($livewire) {
                        $livewire->ownerRecord->update([
                            'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                        ]);
                    }),
                // DeleteAction::make()
                //     ->after(function ($livewire) {
                //         $livewire->ownerRecord->update([
                //             'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                //         ]);
                //     }),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DetachBulkAction::make()
                        ->after(function ($livewire) {
                            $livewire->ownerRecord->update([
                                'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                            ]);
                        }),
                    DeleteBulkAction::make()
                        ->after(function ($livewire) {
                            $livewire->ownerRecord->update([
                                'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                            ]);
                        }),
                ]),
            ]);
    }
}
