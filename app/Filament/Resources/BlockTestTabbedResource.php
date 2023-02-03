<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlockTestTabbedResource\Pages;
use App\Models\BlockTest;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;

class BlockTestTabbedResource extends Resource
{
    protected static ?string $model = BlockTest::class;
    protected static ?string $slug = 'block-test-tabbeds';
    protected static ?string $recordTitleAttribute = 'id';
    protected static ?string $label = "Blocktest Tabbed";


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make("tabs")->schema([
                    Tabs\Tab::make("Base")->schema([

                    ]),
                    Tabs\Tab::make("Content")->schema([
                        Repeater::make("blocks")->schema([
                            Textarea::make("content")->rows(10)
                        ])
                    ])
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
            'index' => Pages\ListBlockTestTabbeds::route('/'),
            'create' => Pages\CreateBlockTestTabbed::route('/create'),
            'edit' => Pages\EditBlockTestTabbed::route('/{record}/edit'),
        ];
    }
}
