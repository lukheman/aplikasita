<?php

namespace App\Filament\Resources\Projects;

use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use App\Enums\ProjectStatus;
use App\Enums\PaymentStatus;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Enums\RecordActionsPosition;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\Projects\RelationManagers\FeaturesRelationManager;
use App\Filament\Resources\Projects\Pages\ListProjects;
use App\Filament\Resources\Projects\Pages\CreateProject;
use App\Filament\Resources\Projects\Pages\EditProject;
use App\Models\Project;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Proyek';

    protected static ?string $pluralLabel = 'Proyek';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('customer_id')
                    ->label('Pelanggan')
                    ->relationship('customer', 'name')
                    ->required()
                    ->searchable(),
                TextInput::make('title')
                    ->label('Judul Proyek')
                    ->required()
                    ->maxLength(255),
                TextInput::make('base_price')
                    ->label('Harga Awal')
                    ->required()
                    ->numeric()
                    ->prefix('Rp')
                    ->minValue(0)
                    ->default(1000000),
                TextInput::make('price')
                    ->label('Harga Total')
                    ->prefix('Rp')
                    ->disabled()
                    ->nullable()
                    ->dehydrated(false)
                    ->hint('Harga awal + total fitur')
                    ->formatStateUsing(fn ($state) => number_format($state, 2, ',', '.')),
                Select::make('status')
                    ->label('Status')
                    ->options(ProjectStatus::options())
                    ->default(ProjectStatus::Pending)
                    ->required(),
                TextInput::make('total_paid')
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
                TextColumn::make('title')
                    ->label('Judul Proyek')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('customer.name')
                    ->label('Pelanggan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('base_price')
                    ->label('Harga Awal')
                    ->money('IDR', true)
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Harga Total')
                    ->money('IDR', true)
                    ->sortable(),
                TextColumn::make('total_paid')
                    ->label('Total Dibayar')
                    ->money('IDR', true)
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn ($state) => $state->getColor()),
                TextColumn::make('payment_status')
                    ->label('Status Pembayaran')
                    ->badge()
                    ->color(fn ($state) => $state->getColor()),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options(ProjectStatus::options()),
                SelectFilter::make('payment_status')
                    ->label('Status Pembayaran')
                    ->options(PaymentStatus::options()),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
                Action::make('Cetak Nota')
                    ->label('Cetak Nota')
                ->url(fn($record): string => route('nota', ['project' => $record])),
                Action::make('Progres')
                    ->label('Progres')
                ->url(fn($record): string => route('progres-projek', ['project' => $record]))

            ], position: RecordActionsPosition::BeforeColumns)
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            FeaturesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProjects::route('/'),
            'create' => CreateProject::route('/create'),
            'edit' => EditProject::route('/{record}/edit'),
        ];
    }
}
