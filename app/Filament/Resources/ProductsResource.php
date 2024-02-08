<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Filament\Resources\ProductsResource\RelationManagers;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-o-gift';

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
                    ->label(__('Name')),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255)
                    ->label(__('Description')),
                Forms\Components\TextInput::make('sku')
                    ->label('SKU')
                    ->required()
                    ->maxLength(255)
                    ->label(__('SKU')),

                Forms\Components\Select::make('categoryDepartment_id')
                    ->label(__('Department'))
                    ->relationship('categoryDepartments', 'name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label(__('Name')),
                        Forms\Components\TextInput::make('description')
                            ->label(__('description'))
                            ->maxLength(255),
                    ]),

                Forms\Components\Select::make('categories_id')
                    ->relationship('categories', 'name')
                    ->searchable()
                    ->preload()
                    ->label(__('Categories'))
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
                Forms\Components\Select::make('subcategories_id')
                    ->relationship('subcategories', 'name')
                    ->label(__('Sub Categories'))
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label(__('Name')),
                        Forms\Components\TextInput::make('description')
                            ->maxLength(255)
                            ->label(__('description')),
                        Forms\Components\Select::make('categories_id')
                            ->relationship('categories', 'name')
                            ->searchable()
                            ->preload()
                            ->label(__('Categories'))
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
                    ]),
                Forms\Components\Select::make('units_id')
                    ->label(__('Unit'))
                    ->relationship('units', 'name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\Hidden::make('created_by')
                            ->default(Auth::id())
                            ->label(__('Created by')),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label(__('Name')),
                        Forms\Components\TextInput::make('description')
                            ->required()
                            ->maxLength(255)
                            ->label(__('description')),
                    ]),
                Forms\Components\Select::make('brands_id')
                    ->relationship('brands', 'name')
                    ->label(__('Brand'))
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\Hidden::make('created_by')
                            ->default(Auth::id())
                            ->label(__('Created by')),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label(__('name')),
                        Forms\Components\TextInput::make('description')
                            ->maxLength(255)
                            ->label(__('description')),
                    ]),
                Forms\Components\Section::make(__('Price of the product'))
                    ->description(__('Purchase price including taxes > Profit margin in % > Sale Price' ))
                    ->schema([
                        Forms\Components\TextInput::make('purchase_price')
                            ->label(__('purchase price'))
                            ->numeric()
                            ->dehydrated()
                            ->live(),
                        Forms\Components\TextInput::make('margin_of_price')
                            ->label(__('margin of price'))
                            ->numeric()
                            ->disabled()
                            ->required()
                            ->dehydrated()
                            ->live(),
                        Forms\Components\TextInput::make('sale_price')
                            ->label(__('Sale Price'))
                            ->dehydrated()
                            ->numeric()
                            ->required()
                            ->reactive()
                            ->live(false, 5)
                            ->afterStateUpdated(fn($state, Forms\Set $set, $get) =>
                            $set('margin_of_price', round((($get('purchase_price') - $state) / $state) * 100) <= 0 ?  abs(round((($get('purchase_price') - $state) / $state) * 100)) : -round((($get('purchase_price') - $state) / $state) * 100)),
                            ),
                    ])->columns(3),
                //Forms\Components\Toggle::make('status'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('categoryDepartment_id')
                    ->numeric()
                    ->sortable()
                    ->label(__('Department')),
                Tables\Columns\TextColumn::make('categories.name')
                    ->numeric()
                    ->sortable()
                    ->label(__('Category')),
                Tables\Columns\TextColumn::make('subcategories.name')
                    ->numeric()
                    ->sortable()
                    ->label(__('Sub Category')),
                Tables\Columns\TextColumn::make('units.name')
                    ->numeric()
                    ->sortable()
                    ->label(__('Unit of measurement')),
                Tables\Columns\TextColumn::make('brands.name')
                    ->numeric()
                    ->sortable()
                    ->label(__('Brand')),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label(__('Name')),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->label(__('Description')),
                Tables\Columns\TextColumn::make('sku')
                    ->label(__('SKU'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('purchase_price')
                    ->numeric()
                    ->sortable()
                    ->label(__('Purchase price')),
                Tables\Columns\TextColumn::make('margin_of_price')
                    ->numeric()
                    ->sortable()
                    ->label(__('Margin of price')),
                Tables\Columns\TextColumn::make('sale_price')
                    ->numeric()
                    ->sortable()
                    ->label(__('Sale price')),

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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
        return __('Products');
    }

    public  static function getNavigationGroup(): ?string
    {
        return __('Products');
    }

    public static function getLabel(): ?string
    {
        return __('Product');
    }
}
