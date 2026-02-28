<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                        TextInput::make('title')
            ->required()
            ->maxLength(255),

TextInput::make('icon')
    ->label('FontAwesome Class')
    ->placeholder('fa-solid fa-person-chalkboard')
    ->helperText('Paste FontAwesome class name'),

        Textarea::make('description')
            ->required()
            ->rows(4),

        TextInput::make('order')
            ->numeric()
            ->default(0),

        Toggle::make('is_active')
            ->default(true),
                //
            ]);
    }
}
