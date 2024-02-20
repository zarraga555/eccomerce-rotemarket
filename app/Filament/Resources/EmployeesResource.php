<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeesResource\Pages;
use App\Filament\Resources\EmployeesResource\RelationManagers;
use App\Models\Employees;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class EmployeesResource extends Resource
{
    protected static ?string $model = Employees::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('type_user')
                    ->default('employee')
                    ->required()
                    ->label('Type'),
                Forms\Components\TextInput::make('identification_number')
                    ->required()
                    ->maxLength(255)
                    ->label(__('CI/NIT/CEX')),
                Forms\Components\TextInput::make('name_or_legal_representative_name')
                    ->required()
                    ->maxLength(255)
                    ->label(__('names')),
                Forms\Components\TextInput::make('lastname_or_or_legal_representative_lastname')
                    ->required()
                    ->maxLength(255)
                    ->label(__('lastname')),
                Forms\Components\TextInput::make('email_or_legal_representative_email')
                    ->email()
                    ->maxLength(255)
                    ->label(__('email')),
                Forms\Components\TextInput::make('phone_or_legal_representative_phone')
                    ->tel()
                    ->maxLength(255)
                    ->label(__('phone')),
                Forms\Components\TextInput::make('mobile_or_legal_representative_mobile')
                    ->tel()
                    ->maxLength(255)
                    ->label(__('mobile')),
                Forms\Components\DatePicker::make('birthdate_or_legal_representative_birthdate')
                    ->native(false)
                    ->label(__('birthdate')),

                Forms\Components\TextInput::make('credit_limit_or_legal_representative_credit_limit')
                    ->numeric()
                    ->label(__('credit_limit')),
                Forms\Components\Hidden::make('user_id')
                    ->default(Auth::id())
                    ->label('Created by'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_or_legal_representative_name')
                    ->searchable()
                    ->label(__('Names')),
                Tables\Columns\TextColumn::make('lastname_or_or_legal_representative_lastname')
                    ->searchable()
                    ->label(__('Lastname')),
                Tables\Columns\TextColumn::make('identification_number')
                    ->searchable()
                    ->label(__('NIT/CI/CEX')),
                Tables\Columns\TextColumn::make('email_or_legal_representative_email')
                    ->searchable()
                    ->label(__('Email')),
                Tables\Columns\TextColumn::make('mobile_or_legal_representative_phone')
                    ->searchable()
                    ->label(__('mobile')),
                Tables\Columns\TextColumn::make('phone_or_legal_representative_phone')
                    ->searchable()
                    ->label(__('Phone')),
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployees::route('/create'),
            'edit' => Pages\EditEmployees::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('type_user', '!=', 'supplier')->where('type_user', '!=', 'customer');
    }
    public static function getNavigationLabel(): string
    {
        return __('Employee');
    }

    public  static function getNavigationGroup(): ?string
    {
        return __('Contacts');
    }

    public static function getLabel(): ?string
    {
        return __('Employee');
    }
}
