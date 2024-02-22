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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
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
                    ->label(__('Percentage discount')),
                Forms\Components\TextInput::make('cash')
                    ->numeric()
                    ->label(__('Money discount')),
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
                    ->label(__('Percentage discount')),
                Tables\Columns\TextColumn::make('cash')
                    ->numeric()
                    ->sortable()
                    ->label(__('Money discount')),
                Tables\Columns\TextColumn::make('coupon_end_date')
                    ->date()
                    ->sortable()
                    ->label(__('Coupon expiration')),
                Tables\Columns\TextColumn::make('maximum_use_limit')
                    ->numeric()
                    ->sortable()
                    ->label(__('Maximum coupon usage limit')),
                Tables\Columns\IconColumn::make('state')
                    ->boolean()
                    ->label(__('Will the coupon be available?')),
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
