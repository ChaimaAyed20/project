<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoordonneeResource\Pages;
use App\Filament\Resources\CoordonneeResource\RelationManagers;
use App\Models\Coordonnee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class CoordonneeResource extends Resource
{
    protected static ?string $model = Coordonnee::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('phone')->required()->maxLength(255),
                TextInput::make('email')->email()->required()->maxLength(255),
                TextInput::make('address')->required()->maxLength(255),
                FileUpload::make('logo')->directory('logos')->image()->imagePreviewHeight('100'),
                TextInput::make('facebook')->label('Facebook URL')->url()->nullable(),
                TextInput::make('instagram')->label('Instagram URL')->url()->nullable(),
                TextInput::make('youtube')->label('YouTube URL')->url()->nullable(),
                TextInput::make('linkedin')->label('LinkedIn URL')->url()->nullable(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('phone'),
                TextColumn::make('email'),
                TextColumn::make('address')->limit(20),
                ImageColumn::make('logo')->label('Logo'),
                TextColumn::make('facebook')->label('FB')->limit(10),
                TextColumn::make('instagram')->limit(10),
                TextColumn::make('youtube')->limit(10),
                TextColumn::make('linkedin')->limit(10),
                TextColumn::make('created_at')->dateTime('d/m/Y'),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListCoordonnees::route('/'),
            'create' => Pages\CreateCoordonnee::route('/create'),
            'edit' => Pages\EditCoordonnee::route('/{record}/edit'),
        ];
    }
}
