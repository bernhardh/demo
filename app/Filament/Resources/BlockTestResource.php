<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlockTestResource\Pages;
use App\Models\BlockTest;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;

class BlockTestResource extends Resource
{
    protected static ?string $model = BlockTest::class;
    protected static ?string $slug = 'block-tests';
    protected static ?string $recordTitleAttribute = 'id';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Repeater::make("blocks")->schema([
                    Textarea::make("content")->rows(10)
                ])
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("id")
            ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlockTests::route('/'),
            'create' => Pages\CreateBlockTest::route('/create'),
            'edit' => Pages\EditBlockTest::route('/{record}/edit'),
        ];
    }
}
