<?php

namespace App\Filament\Resources\AlbumsCategoryResource\Pages;

use App\Filament\Resources\AlbumsCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlbumsCategory extends EditRecord
{
    protected static string $resource = AlbumsCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
