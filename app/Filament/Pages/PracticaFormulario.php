<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;

class PracticaFormulario extends Page implements HasSchemas
{
    use InteractsWithSchemas;

    protected string $view = 'filament.pages.practica-formulario';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'activo' => true,
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Santiago Galicia Romahn y Leonardo Gael Lechuga Arellano')
                    ->schema([
                        TextInput::make('nombre')
                            ->label('Nombre del proyecto')
                            ->required(),

                        Select::make('temas')
                            ->label('Temas')
                            ->options([
                                'Tecnología' => 'Tecnología',
                                'Educación' => 'Educación',
                                'Salud' => 'Salud',
                                'Medio ambiente' => 'Medio ambiente',
                                'Entretenimiento' => 'Entretenimiento',
                            ])
                            ->required()
                            ->native(false)
                            ->placeholder('Seleccione una opción'),

                        Radio::make('prioridad')
                            ->label('Prioridad')
                            ->options([
                                'Baja' => 'Baja',
                                'Media' => 'Media',
                                'Alta' => 'Alta',
                            ])
                            ->inline(),

                        Toggle::make('activo')
                            ->label('Proyecto activo')
                            ->default(true),

                        DatePicker::make('fecha_entrega')
                            ->label('Fecha de entrega')
                            ->required(),
                    ]),
            ])
            ->statePath('data');
    }

    public function guardar(): void
    {
        $datos = $this->form->getState();
    }
}