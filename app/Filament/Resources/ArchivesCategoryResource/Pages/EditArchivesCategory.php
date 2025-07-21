<?php

namespace App\Filament\Resources\ArchivesCategoryResource\Pages;

use App\Filament\Resources\ArchivesCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArchivesCategory extends EditRecord
{
    protected static string $resource = ArchivesCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
