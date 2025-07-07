<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlbumsCategoryResource\Pages;
use App\Filament\Resources\AlbumsCategoryResource\RelationManagers;
use App\Models\AlbumsCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Toggle;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

class AlbumsCategoryResource extends Resource
{
    protected static ?string $model = AlbumsCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Toggle::make('photo')
                ->label('Photo')
                ->default(false),
            Toggle::make('video')
                ->label('Video')
                ->default(false),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            IconColumn::make('photo')
                ->label('Photo')
                ->boolean(),
            IconColumn::make('video')
                ->label('Video')
                ->boolean(),
            TextColumn::make('created_at')
                ->dateTime('d/m/Y')
                ->label('Ajouté le'),
        ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlbumsCategories::route('/'),
            'create' => Pages\CreateAlbumsCategory::route('/create'),
            'edit' => Pages\EditAlbumsCategory::route('/{record}/edit'),
        ];
    }
}
