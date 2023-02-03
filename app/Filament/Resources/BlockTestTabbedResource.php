<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlockTestTabbedResource\Pages;
use App\Models\BlockTest;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
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
        $builder = Builder::make("blocks")
            ->blocks([
                Builder\Block::make('heading')
                    ->schema([
                        TextInput::make('content')
                            ->label('Heading')
                            ->required(),
                    ]),
                Builder\Block::make('paragraph')
                    ->schema([
                        Textarea::make('content')
                            ->label('Paragraph')
                            ->required(),
                    ]),
                Builder\Block::make('image')
                    ->schema([
                        Textarea::make('url')
                            ->label('Image')
                            ->required(),
                        TextInput::make('alt')
                            ->label('Alt text')
                            ->required(),
                    ]),
            ]);

        return $form
            ->schema([
                Tabs::make("tabs")->schema([
                    Tabs\Tab::make("Base")->schema([

                    ]),
                    Tabs\Tab::make("Content")->schema([
                        $builder
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
