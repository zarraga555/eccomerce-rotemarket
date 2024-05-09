<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CouponsResource\Pages;
use App\Filament\Resources\CouponsResource\RelationManagers;
use App\Models\Coupons;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class CouponsResource extends Resource
{
    protected static ?string $model = Coupons::class;

    protected static ?string $navigationIcon = 'heroicon-o-receipt-percent';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('created_by')
                    ->default(Auth::id())
                    ->label('Created by'),
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->maxLength(255)
                    ->label(__('Coupon code')),
                Forms\Components\TextInput::make('percentage')
                    ->numeric()
                    ->dehydrated()
                    ->live()
                    ->label(__('Percentage discount'))
//                    This function means that if there is data in the corresponding inputs, one of them is disabled.
                    ->disabled(function ( $state, Forms\Set $set, $get){
                        if ($get('cash') != ''){
                            return true;
                        }else{
                            return false;
                        }
                    }),
                Forms\Components\TextInput::make('cash')
                    ->numeric()
                    ->label(__('Money discount'))
                    ->live()
                    ->dehydrated()
//                    This function means that if there is data in the corresponding inputs, one of them is disabled.
                    ->disabled(function ( $state, Forms\Set $set, $get){
                        if ($get('percentage') != ''){
                            return true;
                        }else{
                            return false;
                        }
                    }),
                Forms\Components\DatePicker::make('coupon_end_date')
                    ->displayFormat('d/m/Y')
                    ->label(__('Coupon expiration'))
                    ->native(false)
                    ->timezone(env('APP_TIMEZONE'))
                    ->required(),
                Forms\Components\TextInput::make('maximum_use_limit')
                    ->numeric()
                    ->label(__('Maximum coupon usage limit')),
                Forms\Components\Toggle::make('state')
                    ->required()
                    ->label(__('Will the coupon be available?')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code')
                    ->searchable()
                    ->label(__('Coupon code')),
                Tables\Columns\TextColumn::make('percentage')
                    ->numeric()
                    ->sortable()
                    ->label(__('% discount')),
                Tables\Columns\TextColumn::make('cash')
                    ->numeric()
                    ->sortable()
                    ->label(__('Money discount')),
                Tables\Columns\TextColumn::make('coupon_end_date')
                    ->date()
                    ->sortable()
                    ->label(__('Expiration')),
                Tables\Columns\TextColumn::make('maximum_use_limit')
                    ->numeric()
                    ->sortable()
                    ->label(__('Amount of use')),
                Tables\Columns\IconColumn::make('state')
                    ->boolean()
                    ->label(__('Available?')),
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
            'index' => Pages\ListCoupons::route('/'),
            'create' => Pages\CreateCoupons::route('/create'),
            'edit' => Pages\EditCoupons::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
//        Label Navigation
        return __('Coupon');
    }

    public  static function getNavigationGroup(): ?string
    {
//        Label Navigation group
        return __('Products');
    }

    public static function getLabel(): ?string
    {
//        Label List
        return __('Coupons');
    }
}
