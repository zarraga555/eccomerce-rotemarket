<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandsResource\Pages;
use App\Filament\Resources\BrandsResource\RelationManagers;
use App\Models\Brands;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class BrandsResource extends Resource
{
    protected static ?string $model = Brands::class;
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('creat_by')
                    ->default(Auth::id())
                    ->label('Created by'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label(__('name')),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255)
                    ->label(__('description')),
                Forms\Components\FileUpload::make('pathImage')
                    ->directory('brands')
                    ->image()
                    ->preserveFilenames()
                    ->label(__('Upload image')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label(__('Name')),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->label(__('description')),
                ImageColumn::make('pathImage')
                    ->circular()
                    ->label(__('Logo')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrands::route('/create'),
            'edit' => Pages\EditBrands::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
        return __('Brands');
    }

    public  static function getNavigationGroup(): ?string
    {
        return __('Products');
    }

    public static function getLabel(): ?string
    {
        return __('Brand');
    }
}
