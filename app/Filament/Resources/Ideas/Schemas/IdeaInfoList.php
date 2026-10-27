<?php

namespace App\Filament\Resources\Ideas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class IdeaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('titulo'),
                TextEntry::make('descripcion')
                    ->columnSpanFull(),
                TextEntry::make('estado'),
                TextEntry::make('autor'),
                TextEntry::make('categoria.id')
                    ->label('Categoria'),
                TextEntry::make('created_at')
                    ->label('Creada el')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('Actualizada el')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
