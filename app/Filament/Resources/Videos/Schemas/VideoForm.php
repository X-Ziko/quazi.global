<?php

namespace App\Filament\Resources\Videos\Schemas;

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

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('category')
                    ->label('Category'),

                // 🔥 Only YouTube Link
                TextInput::make('video_path')
                    ->label('YouTube Link')
                    ->required()
                    ->url()
                    ->placeholder('https://www.youtube.com/watch?v=xxxx'),

                FileUpload::make('thumbnail')
                    ->directory('video-thumbnails'),

                Textarea::make('short_description'),

                RichEditor::make('details'),

                DatePicker::make('video_date'),
                //
            ]);
    }
}
