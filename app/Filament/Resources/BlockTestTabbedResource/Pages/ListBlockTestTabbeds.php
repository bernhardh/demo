<?php

namespace App\Filament\Resources\BlockTestTabbedResource\Pages;

use App\Filament\Resources\BlockTestTabbedResource;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBlockTestTabbeds extends ListRecords
{
    protected static string $resource = BlockTestTabbedResource::class;


    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
