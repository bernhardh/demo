<?php

namespace App\Filament\Resources\BlockTestTabbedResource\Pages;

use App\Filament\Resources\BlockTestTabbedResource;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBlockTestTabbed extends EditRecord
{
    protected static string $resource = BlockTestTabbedResource::class;


    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
