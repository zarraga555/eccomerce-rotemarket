<?php

namespace App\Filament\Resources\CategoryDepartmentResource\Pages;

use App\Filament\Resources\CategoryDepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoryDepartment extends EditRecord
{
    protected static string $resource = CategoryDepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
