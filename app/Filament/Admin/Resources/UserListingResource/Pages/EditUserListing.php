<?php

namespace App\Filament\Admin\Resources\UserListingResource\Pages;

use App\Filament\Admin\Resources\UserListingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserListing extends EditRecord
{
    protected static string $resource = UserListingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
