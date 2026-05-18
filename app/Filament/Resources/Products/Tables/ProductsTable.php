<?php

namespace App\Filament\Resources\Products\Tables;


use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;


class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Menampilkan gambar thumbnail
            ImageColumn::make('thumbnail')
                ->label('Foto')
                ->disk('public'), 

            TextColumn::make('name')
                ->label('Nama Produk')
                ->searchable()
                ->sortable(),

            // Menampilkan nama kategori dari relasi
            TextColumn::make('category.name')
                ->label('Kategori')
                ->sortable(),

            TextColumn::make('price')
                ->label('Harga')
                ->money('idr') // Format mata uang Rupiah
                ->sortable(),

            TextColumn::make('is_featured')
                ->label('Status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'featured' => 'success',
                    'not_featured' => 'gray',
                }),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
