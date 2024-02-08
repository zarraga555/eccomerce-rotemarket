<?php

namespace App\Filament\Resources\CategoryDepartmentResource\Pages;

use App\Filament\Resources\CategoryDepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategoryDepartment extends CreateRecord
{
    protected static string $resource = CategoryDepartmentResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
