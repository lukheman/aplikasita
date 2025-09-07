<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Proyek';

    protected static ?string $pluralLabel = 'Proyek';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('customer_id')
                    ->label('Pelanggan')
                    ->relationship('customer', 'name')
                    ->required()
                    ->searchable(),
                Forms\Components\TextInput::make('title')
                    ->label('Judul Proyek')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('base_price')
                    ->label('Harga Awal')
                    ->required()
                    ->numeric()
                    ->prefix('Rp')
                    ->minValue(0)
                    ->default(0),
                Forms\Components\TextInput::make('price')
                    ->label('Harga Total')
                    ->prefix('Rp')
                    ->disabled()
                    ->nullable()
                    ->dehydrated(false)
                    ->hint('Harga awal + total fitur')
                    ->formatStateUsing(fn ($state) => number_format($state, 2, ',', '.')),
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options(\App\Enums\ProjectStatus::options())
                    ->default(\App\Enums\ProjectStatus::Pending)
                    ->required(),
                Forms\Components\Select::make('payment_status')
                    ->label('Status Pembayaran')
                    ->options(\App\Enums\PaymentStatus::options())
                    ->default(\App\Enums\PaymentStatus::Unpaid)
                    ->required(),
                Forms\Components\TextInput::make('total_paid')
                    ->label('Total Dibayar')
                    ->numeric()
                    ->prefix('Rp')
                    ->default(0)
                    ->minValue(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul Proyek')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer.name')
                    ->label('Pelanggan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('base_price')
                    ->label('Harga Awal')
                    ->money('IDR', true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Harga Total')
                    ->money('IDR', true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_paid')
                    ->label('Total Dibayar')
                    ->money('IDR', true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn ($state) => $state->getColor()),
                Tables\Columns\TextColumn::make('payment_status')
                    ->label('Status Pembayaran')
                    ->badge()
                    ->color(fn ($state) => $state->getColor()),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options(\App\Enums\ProjectStatus::options()),
                Tables\Filters\SelectFilter::make('payment_status')
                    ->label('Status Pembayaran')
                    ->options(\App\Enums\PaymentStatus::options()),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ], position: ActionsPosition::BeforeColumns)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\FeaturesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
