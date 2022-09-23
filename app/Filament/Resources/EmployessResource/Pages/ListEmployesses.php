<?php

namespace App\Filament\Resources\EmployessResource\Pages;

use App\Filament\Resources\EmployessResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmployesses extends ListRecords
{
    protected static string $resource = EmployessResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
