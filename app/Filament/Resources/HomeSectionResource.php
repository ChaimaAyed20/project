<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\HomeSection;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomeSectionResource\Pages;
use App\Filament\Resources\HomeSectionResource\RelationManagers;

class HomeSectionResource extends Resource
{
    protected static ?string $model = HomeSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Titre')
                    ->required(),

                TextInput::make('subtitle')
                    ->label('Sous-titre'),

                Textarea::make('short_description')
                    ->label('Description courte'),

                RichEditor::make('description')
                    ->label('Description complète'),

                TextInput::make('icon')
                    ->label('Icône (pour planning)')
                    ->placeholder('ex: flaticon-calendar'),

                FileUpload::make('image1')
                    ->label('Image 1')
                    ->image()
                    ->directory('home'),

                FileUpload::make('image2')
                    ->label('Image 2')
                    ->image()
                    ->directory('home'),

                FileUpload::make('image3')
                    ->label('Image 3')
                    ->image()
                    ->directory('home'),
            ]);
    }    

     public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')->label('Titre')->searchable(),
                TextColumn::make('subtitle')->label('Sous-titre')->limit(20),
                TextColumn::make('created_at')->label('Créé le')->date(),
            ])
            ->defaultSort('id', 'asc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
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
            'index' => Pages\ListHomeSections::route('/'),
            'create' => Pages\CreateHomeSection::route('/create'),
            'edit' => Pages\EditHomeSection::route('/{record}/edit'),
        ];
    }
}
