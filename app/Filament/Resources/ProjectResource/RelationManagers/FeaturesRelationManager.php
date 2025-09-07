<?php

namespace App\Filament\Resources\ProjectResource\RelationManagers;

use App\Models\Feature;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FeaturesRelationManager extends RelationManager
{
    protected static string $relationship = 'features';

    protected static ?string $title = 'Fitur';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama Fitur')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->label('Harga')
                    ->required()
                    ->numeric()
                    ->prefix('Rp')
                    ->minValue(0)
                    ->formatStateUsing(fn ($state) => number_format($state, 2, ',', '.')),
                Forms\Components\Textarea::make('description')
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
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Fitur')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR', true)
                    ->sortable(),
                // Tables\Columns\TextColumn::make('description')
                //     ->label('Deskripsi')
                //     ->limit(50)
                //     ->tooltip(fn ($record) => $record->description),
                Tables\Columns\BooleanColumn::make('pivot.is_completed')
                    ->label('Selesai')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('price')
                    ->form([
                        Forms\Components\TextInput::make('min_price')
                            ->label('Harga Minimum')
                            ->numeric(),
                        Forms\Components\TextInput::make('max_price')
                            ->label('Harga Maksimum')
                            ->numeric(),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when($data['min_price'], fn (Builder $q) => $q->where('price', '>=', $data['min_price']))
                            ->when($data['max_price'], fn (Builder $q) => $q->where('price', '<=', $data['max_price']));
                    }),
                Tables\Filters\SelectFilter::make('is_completed')
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
                Tables\Actions\CreateAction::make()
                    ->label('Tambah Fitur Baru')
                    ->after(function ($livewire, $record) {
                        $livewire->ownerRecord->update([
                            'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                        ]);
                    }),
                Tables\Actions\AttachAction::make()
                    ->label('Tambah Fitur Existing')
                    ->recordSelect(
                        fn ($livewire) => Forms\Components\Select::make('recordId')
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
            ->actions([
                Tables\Actions\EditAction::make()
                    ->after(function ($livewire, $record) {
                        $livewire->ownerRecord->update([
                            'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                        ]);
                    }),
                Tables\Actions\Action::make('toggle_completed')
                    ->label('Toggle Selesai')
                    ->action(function ($record, $livewire) {
                        $livewire->ownerRecord->features()->updateExistingPivot($record->id, [
                            'is_completed' => !$record->pivot->is_completed,
                        ]);
                    })
                    ->icon(fn ($record) => $record->pivot->is_completed ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle')
                    ->color(fn ($record) => $record->pivot->is_completed ? 'danger' : 'success'),
                Tables\Actions\DetachAction::make()
                    ->after(function ($livewire) {
                        $livewire->ownerRecord->update([
                            'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                        ]);
                    }),
                Tables\Actions\DeleteAction::make()
                    ->after(function ($livewire) {
                        $livewire->ownerRecord->update([
                            'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                        ]);
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make()
                        ->after(function ($livewire) {
                            $livewire->ownerRecord->update([
                                'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                            ]);
                        }),
                    Tables\Actions\DeleteBulkAction::make()
                        ->after(function ($livewire) {
                            $livewire->ownerRecord->update([
                                'price' => ($livewire->ownerRecord->base_price + $livewire->ownerRecord->features()->sum('price')) ?: 0,
                            ]);
                        }),
                ]),
            ]);
    }
}
