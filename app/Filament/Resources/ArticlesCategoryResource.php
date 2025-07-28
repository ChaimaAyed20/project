<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticlesCategoryResource\Pages;
use App\Filament\Resources\ArticlesCategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;

class ArticlesCategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name_ar')->label('الاسم بالعربية')->required(),
            TextInput::make('name_fr')->label('Nom (FR)')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name_fr')->label('Nom (FR)'),
            Tables\Columns\TextColumn::make('name_ar')->label('الاسم بالعربية'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticlesCategories::route('/'),
            'create' => Pages\CreateArticlesCategory::route('/create'),
            'edit' => Pages\EditArticlesCategory::route('/{record}/edit'),
        ];
    }
}
