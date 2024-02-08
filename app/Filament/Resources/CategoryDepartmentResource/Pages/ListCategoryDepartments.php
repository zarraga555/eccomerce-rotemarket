<?php

namespace App\Filament\Resources\CategoryDepartmentResource\Pages;

use App\Filament\Resources\CategoryDepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryDepartments extends ListRecords
{
    protected static string $resource = CategoryDepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label(__('Department')),
        ];
    }
}
