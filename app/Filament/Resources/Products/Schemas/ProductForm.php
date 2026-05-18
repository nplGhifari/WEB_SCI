<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;


class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('name')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Illuminate\Support\Str::slug($state))),
            
            TextInput::make('slug')
                ->disabled()
                ->dehydrated()
                ->required(),

            Select::make('category_id')
                ->label('Category')
                ->relationship('category', 'name') // Mengambil data dari relasi 'category' kolom 'name'
                ->searchable() // Opsional: agar kategori bisa dicari jika datanya banyak
                ->preload()    // Opsional: agar data langsung muncul saat diklik
                ->required(),
                
            TextInput::make('price')
                ->numeric()
                ->prefix('IDR')
                ->required(),

            FileUpload::make('thumbnail')
                ->image()
                ->disk('public') // Pastikan sudah php artisan storage:link
                ->directory('products/thumbnails')
                ->required(),

            RichEditor::make('content')
                ->columnSpanFull()
                ->required(),

            Select::make('is_featured')
                ->options([
                    'featured' => 'Featured',
                    'not_featured' => 'Not Featured',
                ])
                ->default('not_featured'),
            ]);
    }
}
