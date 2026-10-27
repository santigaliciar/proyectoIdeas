<?php

namespace App\Filament\Resources\Ideas\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use App\Helpers\EstadoIdea;

class IdeaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('titulo')
                    ->required()
                    ->label('Título de la idea')
                    ->helperText('Escribe un título que sea ilustrativo y breve')
                    ->placeholder('Ej. Aplicación de comida'),
                Textarea::make('descripcion')
                    ->required()
                    ->label('Describe tu idea')
                    ->helperText('Escribe a detalle en que consiste la idea de tu proyecto')
                    ->columnSpanFull(),
                Select::make('estado')
                    ->required()
                    ->options(EstadoIdea::opciones()),
                TextInput::make('autor')
                    ->required(),
                Select::make('categoria_id')
                    ->relationship('categoria', 'nombre')
                    ->required(),
            ]);
    }
}
