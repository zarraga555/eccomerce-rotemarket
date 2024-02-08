<?php

namespace App\Filament\Resources\SubCategoriesResource\Pages;

use App\Filament\Resources\SubCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSubCategories extends CreateRecord
{
    protected static string $resource = SubCategoriesResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
