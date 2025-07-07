<?php

namespace App\Filament\Resources\CoordonneeResource\Pages;

use App\Filament\Resources\CoordonneeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoordonnee extends EditRecord
{
    protected static string $resource = CoordonneeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
