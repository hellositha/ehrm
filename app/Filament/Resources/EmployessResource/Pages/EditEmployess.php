<?php

namespace App\Filament\Resources\EmployessResource\Pages;

use App\Filament\Resources\EmployessResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmployess extends EditRecord
{
    protected static string $resource = EmployessResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
