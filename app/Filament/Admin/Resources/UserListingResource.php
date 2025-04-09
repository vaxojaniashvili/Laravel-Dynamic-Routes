<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UserListingResource\Pages;
use App\Filament\Admin\Resources\UserListingResource\RelationManagers;
use App\Models\User;
use App\Models\UserListing;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserListingResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("first_name")->required(),
                Forms\Components\TextInput::make("email")->email(),
                Forms\Components\TextInput::make("password")->password()->visibleOn(''),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("first_name"),
                Tables\Columns\TextColumn::make("email"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListUserListings::route('/'),
            'create' => Pages\CreateUserListing::route('/create'),
            'edit' => Pages\EditUserListing::route('/{record}/edit'),
        ];
    }
}
