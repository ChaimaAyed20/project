<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventsCategoryResource\Pages;
use App\Filament\Resources\EventsCategoryResource\RelationManagers;
use App\Models\EventsCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventsCategoryResource extends Resource
{
    protected static ?string $model = EventsCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder'; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->defaultSort('id')
            ->filters([
                //
            ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEventsCategories::route('/'),
            'create' => Pages\CreateEventsCategory::route('/create'),
            'edit' => Pages\EditEventsCategory::route('/{record}/edit'),
        ];
    }
}