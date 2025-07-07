<?php

namespace App\Filament\Resources\EventsCategoryResource\Pages;

use App\Filament\Resources\EventsCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventsCategories extends ListRecords
{
    protected static string $resource = EventsCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
