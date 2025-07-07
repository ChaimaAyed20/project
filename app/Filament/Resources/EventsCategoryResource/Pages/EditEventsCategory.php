<?php

namespace App\Filament\Resources\EventsCategoryResource\Pages;

use App\Filament\Resources\EventsCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventsCategory extends EditRecord
{
    protected static string $resource = EventsCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
