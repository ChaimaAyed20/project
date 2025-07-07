<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopicResource\Pages;
use App\Filament\Resources\TopicResource\RelationManagers;
use App\Models\Topic;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;


class TopicResource extends Resource
{
    protected static ?string $model = Topic::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('type_reference')
                ->label('Reference Type')
                ->required()
                ->placeholder('e.g. news, event'),
    
            TextInput::make('reference_id')
                ->label('Reference ID')
                ->numeric()
                ->required(),
    
            TextInput::make('designation_ar')
                ->label('Title')
                ->required(),
    
            Textarea::make('description_ar')
                ->label('Description')
                ->required(),
        ]);
    }
    

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('designation_ar')->label('Title')->searchable(),
            TextColumn::make('type_reference')->label('Type'),
            TextColumn::make('reference_id')->label('Ref ID'),
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
            'index' => Pages\ListTopics::route('/'),
            'create' => Pages\CreateTopic::route('/create'),
            'edit' => Pages\EditTopic::route('/{record}/edit'),
        ];
    }
}
