<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubCategoriesResource\Pages;
use App\Filament\Resources\SubCategoriesResource\RelationManagers;
use App\Models\SubCategories;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class SubCategoriesResource extends Resource
{
    protected static ?string $model = SubCategories::class;
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationIcon = 'heroicon-o-table-cells';

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
                    ->maxLength(255)
                    ->label(__('description')),
                Forms\Components\Select::make('categories_id')
                    ->label(__('Categories'))
                    ->relationship('categories', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label(__('Name')),
                        Forms\Components\TextInput::make('description')
                            ->maxLength(255)
                            ->label(__('Description')),
                        Forms\Components\Select::make('categoryDepartment_id')
                            ->relationship('categoryDepartment', 'name')
                            ->label(__('Department'))
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->label(__('Name')),
                                Forms\Components\TextInput::make('description')
                                    ->maxLength(255)
                                    ->label(__('Description')),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('categories.name')
                    ->numeric()
                    ->sortable()
                    ->label('Category'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label('Name'),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->label('Description'),
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
            'index' => Pages\ListSubCategories::route('/'),
            'create' => Pages\CreateSubCategories::route('/create'),
            'edit' => Pages\EditSubCategories::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
        return __('Sub Category');
    }

    public  static function getNavigationGroup(): ?string
    {
        return __('Products');
    }

    public static function getLabel(): ?string
    {
        return __('Sub Category');
    }
}
