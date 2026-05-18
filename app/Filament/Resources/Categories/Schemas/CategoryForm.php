<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput; // Pastikan import ini ada

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name') // Pastikan ID nya 'name' sesuai kolom di database
                    ->required()
                    ->maxLength(255),
                // Input lainnya...
            ]);
    }
}
