<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryDepartmentResource\Pages;
use App\Filament\Resources\CategoryDepartmentResource\RelationManagers;
use App\Models\CategoryDepartment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class CategoryDepartmentResource extends Resource
{
    protected static ?string $model = CategoryDepartment::class;
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
//                Forms\Components\Hidden::make('created_by')
//                    ->default(Auth::id())
//                    ->label('Created by'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label(__('Name')),
                Forms\Components\TextInput::make('description')
                    ->label(__('description'))
                    ->maxLength(255),
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
                    ->label(__('Description')),
//                Tables\Columns\TextColumn::make('created_at')
//                    ->dateTime()
//                    ->sortable()
//                    ->toggleable(isToggledHiddenByDefault: true),
//                Tables\Columns\TextColumn::make('updated_at')
//                    ->dateTime()
//                    ->sortable()
//                    ->toggleable(isToggledHiddenByDefault: true),
//                Tables\Columns\TextColumn::make('deleted_at')
//                    ->dateTime()
//                    ->sortable()
//                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListCategoryDepartments::route('/'),
            'create' => Pages\CreateCategoryDepartment::route('/create'),
            'edit' => Pages\EditCategoryDepartment::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
        return __('Departments');
    }

    public  static function getNavigationGroup(): ?string
    {
        return __('Products');
    }

    public static function getLabel(): ?string
    {
        return __('Department');
    }
}
