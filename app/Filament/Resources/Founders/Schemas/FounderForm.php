<?php

namespace App\Filament\Resources\Founders\Schemas;

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


class FounderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
FileUpload::make('logo')
    ->disk('public')  // 🔥 খুব গুরুত্বপূর্ণ
    ->directory('founder-logos')
    ->image()
    ->required(),

TextInput::make('title'),

TextInput::make('link')
    ->url(),

TextInput::make('order')
    ->numeric()
    ->default(0),

Toggle::make('is_active')
    ->default(true),
                //
            ]);
    }
}
