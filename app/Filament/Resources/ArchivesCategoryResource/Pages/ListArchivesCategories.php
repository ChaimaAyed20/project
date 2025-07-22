<?php

namespace App\Filament\Resources\ArchivesCategoryResource\Pages;

use App\Filament\Resources\ArchivesCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArchivesCategories extends ListRecords
{
    protected static string $resource = ArchivesCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
