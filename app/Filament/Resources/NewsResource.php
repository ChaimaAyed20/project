<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;


class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        TextInput::make('designation_ar')
            ->label('Title (Arabic)')
            ->required()
            ->maxLength(255),

        Textarea::make('description_ar')
            ->label('Description (Arabic)')
            ->required(),

        FileUpload::make('cover')
            ->label('Cover Image')
            ->image()
            ->nullable(),

        Select::make('author_id')
            ->label('Author')
            ->relationship('author', 'name')
            ->required(),

        FileUpload::make('files')
            ->label('Files')
            ->multiple()
            ->nullable(),

        FileUpload::make('images')
            ->label('Images')
            ->image()
            ->multiple()
            ->nullable(),

        DatePicker::make('publication')
            ->label('Publication Date')
            ->nullable(),
        Select::make('categories')
            ->label('Categories')
            ->multiple()
            ->relationship('categories', 'designation_ar')
            ->preload()
            ->required(),
    ]);
}


public static function table(Table $table): Table
{
    return $table->columns([
        TextColumn::make('designation_ar')->label('Title')->searchable(),
        TextColumn::make('author.name')->label('Author')->sortable(),
        TextColumn::make('publication')->date(),
        TextColumn::make('created_at')->dateTime('d/m/Y H:i'),
    ])->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
