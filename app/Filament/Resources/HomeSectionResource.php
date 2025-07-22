<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\HomeSection;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomeSectionResource\Pages;
use App\Filament\Resources\HomeSectionResource\RelationManagers;

class HomeSectionResource extends Resource
{
    protected static ?string $model = HomeSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
{
    return $form->schema([
        TextInput::make('title')->required(),
        TextInput::make('subtitle'),
        Textarea::make('short_description'),

        FileUpload::make('image1')->image(),
        FileUpload::make('image2')->image(),
        FileUpload::make('image3')->image(),

        TextInput::make('icon1')->label('Icon 1 (ex: nom de classe ou url)'),
        TextInput::make('icon1_title'),
        Textarea::make('icon1_description'),

        TextInput::make('icon2'),
        TextInput::make('icon2_title'),
        Textarea::make('icon2_description'),

        TextInput::make('icon3'),
        TextInput::make('icon3_title'),
        Textarea::make('icon3_description'),

        TextInput::make('icon4'),
        TextInput::make('icon4_title'),
        Textarea::make('icon4_description'),
    ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
