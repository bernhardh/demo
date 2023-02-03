<?php

namespace App\Filament\Resources\BlockTestResource\Pages;

use App\Filament\Resources\BlockTestResource;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBlockTests extends ListRecords
{
    protected static string $resource = BlockTestResource::class;


    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
