<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArchivesCategoryResource\Pages;
use App\Filament\Resources\ArchivesCategoryResource\RelationManagers;
use App\Models\ArchiveCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class ArchivesCategoryResource extends Resource
{
    protected static ?string $model = ArchiveCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_ar')
                ->label('Désignation')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('designation_ar')->label('Désignation'),
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
            'index' => Pages\ListArchivesCategories::route('/'),
            'create' => Pages\CreateArchivesCategory::route('/create'),
            'edit' => Pages\EditArchivesCategory::route('/{record}/edit'),
        ];
    }
}
