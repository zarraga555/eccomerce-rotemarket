<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label(__('Name')),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->label(__('Email')),
                Forms\Components\TextInput::make('password')
                    ->hiddenOn('edit')
                    ->password()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make("roles")
                    ->multiple()
                    ->relationship('roles', 'name')
                    ->preload()
                    ->label(__('Roles'))
                    ->required(),
                Forms\Components\FileUpload::make('profile_photo_path')
                    ->image()
                    ->label(__('Profile photo')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label(__('Name')),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->label(__('Email')),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable()
                    ->label(__('Email verified at')),
                Tables\Columns\TextColumn::make('type_user')
                    ->searchable()
                    ->label(__('Type user')),
                Tables\Columns\TextColumn::make('profile_photo_path')
                    ->searchable()
                    ->label(__('Profile photo')),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label(__('Created at')),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
        return __('Users');
    }

    public  static function getNavigationGroup(): ?string
    {
        return __('User Management');
    }

    public static function getLabel(): ?string
    {
        return __('Users');
    }
}
