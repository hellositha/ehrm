<?php

namespace App\Filament\Resources\EmployessResource\Pages;

use App\Filament\Resources\EmployessResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmployess extends CreateRecord
{
    protected static string $resource = EmployessResource::class;
}
