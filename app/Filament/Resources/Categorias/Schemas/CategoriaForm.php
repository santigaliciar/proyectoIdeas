<?php

namespace App\Filament\Resources\Categorias\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CategoriaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    //->password()
                    //->email()
                    ->label('Nombre de categoría')
                    ->helperText('Ingresa el nombre de la categoria')
                    ->placeHolder('Ej. Categoria')
                    // ->dissabled()
                    ->inlineLabel()
                    ->required(),
                Textarea::make('descripcion')
                    ->label('Descripción')
                    ->required()
                    ->helperText('Ingresa una descripción completa')
                    ->columnSpanFull(),
            ]);
    }
}
