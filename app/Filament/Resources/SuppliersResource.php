<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuppliersResource\Pages;
use App\Filament\Resources\SuppliersResource\RelationManagers;
use App\Models\Suppliers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class SuppliersResource extends Resource
{
    protected static ?string $model = Suppliers::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('type_user')
                    ->default('supplier')
                    ->required()
                    ->label('Type'),
                Forms\Components\TextInput::make('company_name_supplier')
                    ->maxLength(255)
                    ->label(__('company name')),
                Forms\Components\TextInput::make('identification_number')
                    ->required()
                    ->maxLength(255)
                    ->label(__('CI/NIT/CEX')),
                Forms\Components\TextInput::make('name_or_legal_representative_name')
                    ->required()
                    ->maxLength(255)
                    ->label(__('name_or_legal_representative_name')),
                Forms\Components\TextInput::make('lastname_or_or_legal_representative_lastname')
                    ->required()
                    ->maxLength(255)
                    ->label(__('lastname_or_or_legal_representative_lastname')),
                Forms\Components\TextInput::make('email_or_legal_representative_email')
                    ->email()
                    ->maxLength(255)
                    ->label(__('email_or_legal_representative_email')),
                Forms\Components\TextInput::make('phone_or_legal_representative_phone')
                    ->tel()
                    ->maxLength(255)
                    ->label(__('phone_or_legal_representative_phone')),
                Forms\Components\TextInput::make('mobile_or_legal_representative_mobile')
                    ->tel()
                    ->maxLength(255)
                    ->label(__('mobile_or_legal_representative_mobile')),
                Forms\Components\DatePicker::make('birthdate_or_legal_representative_birthdate')
                    ->native(false)
                    ->label(__('birthdate_or_legal_representative_birthdate')),

                Forms\Components\TextInput::make('credit_limit_or_legal_representative_credit_limit')
                    ->numeric()
                    ->label(__('credit_limit_or_legal_representative_credit_limit')),
                Forms\Components\Hidden::make('user_id')
                    ->default(Auth::id())
                    ->label('Created by'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identification_number')
                    ->searchable()
                    ->label(__('NIT/CI/CEX')),
                Tables\Columns\TextColumn::make('company_name_supplier')
                    ->searchable()
                    ->label(__('Company')),
                Tables\Columns\TextColumn::make('name_or_legal_representative_name')
                    ->searchable()
                    ->label(__('names')),
                Tables\Columns\TextColumn::make('lastname_or_or_legal_representative_lastname')
                    ->searchable()
                    ->label(__('Lastname')),
                Tables\Columns\TextColumn::make('email_or_legal_representative_email')
                    ->searchable()
                    ->label(__('Email')),
                Tables\Columns\TextColumn::make('phone_or_legal_representative_phone')
                    ->searchable()
                    ->label(__('Phone')),
                Tables\Columns\TextColumn::make('mobile_or_legal_representative_phone')
                    ->searchable()
                    ->label(__('mobile')),
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
            'index' => Pages\ListSuppliers::route('/'),
            'create' => Pages\CreateSuppliers::route('/create'),
            'edit' => Pages\EditSuppliers::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('type_user', '!=', 'customer')->where('type_user', '!=', 'employee');
    }

    public static function getNavigationLabel(): string
    {
        return __('Suppliers');
    }

    public  static function getNavigationGroup(): ?string
    {
        return __('Contacts');
    }

    public static function getLabel(): ?string
    {
        return __('Suppliers');
    }
}
