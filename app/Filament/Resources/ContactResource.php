<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
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

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_ar')
                ->label('Name (Arabic)')
                ->required(),
    
            TextInput::make('email')
                ->email()
                ->required(),
    
            Textarea::make('subject')
                ->required(),
    
            Textarea::make('message')
                ->required(),
        ]);
    }
    

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('designation_ar')->label('Name')->searchable(),
            TextColumn::make('email')->searchable(),
            TextColumn::make('subject')->limit(30)->toggleable(),
            TextColumn::make('created_at')->dateTime('d/m/Y H:i'),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
