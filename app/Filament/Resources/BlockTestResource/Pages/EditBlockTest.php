<?php

namespace App\Filament\Resources\BlockTestResource\Pages;

use App\Filament\Resources\BlockTestResource;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBlockTest extends EditRecord
{
    protected static string $resource = BlockTestResource::class;


    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
