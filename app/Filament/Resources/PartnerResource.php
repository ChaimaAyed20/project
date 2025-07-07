<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerResource\Pages;
use App\Filament\Resources\PartnerResource\RelationManagers;
use App\Models\Partner;
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

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('designation_ar')
                ->label('Nom du partenaire')
                ->required(),

            FileUpload::make('logo')
                ->image()
                ->label('Logo')
                ->directory('partners')  // stored in storage/app/public/partners
                ->nullable(),

            TextInput::make('link')
                ->label('Site Web')
                ->url()
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('designation_ar')->label('Nom'),
            ImageColumn::make('logo')->label('Logo')->circular(),
            TextColumn::make('link')
                ->label('Lien')
                ->url(fn ($record) => $record->link)
                ->openUrlInNewTab(),
            TextColumn::make('created_at')->label('Ajouté le')->dateTime('d/m/Y'),
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
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }
}
