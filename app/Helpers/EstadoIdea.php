<?php
namespace App\Helpers;

class EstadoIdea
{

    public static function opciones(): array
    {

        return [
            'registrada' => 'Registrada',
            'en revision' => 'En revision',
            'aprobada' => 'Aprobada',
            'rechazada' => 'Rechazada'
        ];
    }

}