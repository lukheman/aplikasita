<?php

namespace App\Filament\Resources\Features;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\Features\Pages\ListFeatures;
use App\Filament\Resources\FeatureResource\Pages;
// use App\Filament\Resources\FeatureResource\RelationManagers;
use App\Models\Feature;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeatureResource extends Resource
{
    protected static ?string $model = Feature::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Fitur';

    protected static ?string $pluralLabel = 'Fitur';

    public static function form(Schema $schema): Schema
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
                    ->minValue(0),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->nullable()
                    ->rows(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Fitur')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR', true)
                    ->sortable(),
                // Tables\Columns\TextColumn::make('description')
                //     ->label('Deskripsi')
                //     ->limit(50)
                //     ->tooltip(fn ($record) => $record->description),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->label('Dibuat')
                //     ->dateTime('d M Y H:i')
                //     ->sortable(),
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
                            ->when($data['min_price'], fn ($q) => $q->where('price', '>=', $data['min_price']))
                            ->when($data['max_price'], fn ($q) => $q->where('price', '<=', $data['max_price']));
                    }),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // RelationManagers\ProjectsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFeatures::route('/'),
            // 'create' => Pages\CreateFeature::route('/create'),
            // 'edit' => Pages\EditFeature::route('/{record}/edit'),
        ];
    }
}
