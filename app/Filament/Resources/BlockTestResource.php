<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlockTestResource\Pages;
use App\Models\BlockTest;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
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
                $builder
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
