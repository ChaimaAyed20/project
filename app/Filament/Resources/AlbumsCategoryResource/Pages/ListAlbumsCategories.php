<?php

namespace App\Filament\Resources\AlbumsCategoryResource\Pages;

use App\Filament\Resources\AlbumsCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlbumsCategories extends ListRecords
{
    protected static string $resource = AlbumsCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
