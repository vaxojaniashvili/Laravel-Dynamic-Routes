<?php

namespace App\Filament\Admin\Resources\UserListingResource\Pages;

use App\Filament\Admin\Resources\UserListingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserListing extends CreateRecord
{
    protected static string $resource = UserListingResource::class;
}
