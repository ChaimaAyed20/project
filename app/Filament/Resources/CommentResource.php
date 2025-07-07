<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        Textarea::make('content')->label('Comment')->required(),

        Select::make('user_id')
            ->relationship('user', 'name')
            ->label('Author')
            ->required()
            ->searchable(),

        Select::make('topic_id')
            ->relationship('topic', 'designation_ar') // adjust if different
            ->label('Topic')
            ->required(),

        Select::make('comment_id')
            ->relationship('parent', 'content') // show part of parent comment
            ->label('Reply To')
            ->nullable()
            ->searchable(),
    ]);
}

public static function table(Table $table): Table
{
    return $table->columns([
        TextColumn::make('user.name')->label('Author')->searchable(),
        TextColumn::make('topic.designation_ar')->label('Topic'),
        TextColumn::make('content')->limit(50)->label('Content'),
        TextColumn::make('created_at')->dateTime('d/m/Y H:i'),
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
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }
}
