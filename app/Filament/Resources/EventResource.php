<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('events_category_id')
                    ->label('Category')
                    ->relationship('categories', 'name') // For many-to-many, see note below
                    ->multiple() // Because you have many-to-many via pivot
                    ->preload()
                    ->required(),

                Forms\Components\TextInput::make('designation_ar')
                    ->label('Designation (Arabic)')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('description_ar')
                    ->label('Description (Arabic)')
                    ->required(),

                Forms\Components\DateTimePicker::make('start_date')
                    ->required(),

                Forms\Components\DateTimePicker::make('end_date')
                    ->required(),

                Forms\Components\TextInput::make('place'),

                Forms\Components\Textarea::make('organizer'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),

                Tables\Columns\TextColumn::make('designation_ar')->searchable()->sortable(),

                Tables\Columns\TextColumn::make('start_date')->dateTime()->sortable(),

                Tables\Columns\TextColumn::make('end_date')->dateTime()->sortable(),

                Tables\Columns\TextColumn::make('place')->sortable(),

                Tables\Columns\TextColumn::make('organizer')->limit(20),

                Tables\Columns\TagsColumn::make('categories.name')->label('Categories'),
                
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->defaultSort('id');
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}