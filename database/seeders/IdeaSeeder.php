<?php
<<<<<<< HEAD
namespace Database\Seeders;
use App\Models\Idea;
use Illuminate\Database\Seeder;
=======

namespace Database\Seeders;

use App\Models\Idea;
use Illuminate\Database\Seeder;

>>>>>>> e77b7be8b63c743d78991f74e11d2a1588823968
class IdeaSeeder extends Seeder
{
    public function run(): void
    {
<<<<<<< HEAD
        Idea::FirstOrCreate([
            'titulo' => 'Aplicación para organizar citas
            veterinarias',
            'descripcion' => 'Sistema para registrar y organizar
            citas de mascotas.',
            'estado' => 'registrada',
            'autor' => 'Jose',
            'categoria_id' => 1
        ]);
        
        Idea::FirstOrCreate([
            'titulo' => 'Plataforma para cursos en línea',
            'descripcion' => 'Sistema para ofrecer cursos y
            materiales educativos.',
            'estado' => 'en revisión',
            'autor' => 'Pedro',
            'categoria_id' => 2
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Plataforma para cursos en prescenciales',
            'descripcion' => 'Sistema para ofrecer cursos y
            materiales educativos.',
            'estado' => 'registrada',
            'autor' => 'Jesus',
            'categoria_id' => 2
        ]);
    }
}
=======
        Idea::create([
            'titulo' => 'Aplicación para organizar citas veterinarias',
            'descripcion' => 'Sistema para registrar y organizar citas de mascotas.',
            'estado' => 'registrada',
            'autor' => 'Jose',
            'categoria_id' => 1,
        ]);

        Idea::create([
            'titulo' => 'Plataforma para cursos en línea',
            'descripcion' => 'Sistema para ofrecer cursos y materiales educativos.',
            'estado' => 'en revisión',
            'autor' => 'Pedro',
            'categoria_id' => 2,
        ]);

        Idea::create([

        'titulo' => 'Sistema para revalidar materias del extranjero',
        'descripcion' => 'Sistema para comparar materias a revalidar en el extranjero con las de la facultad',
        'estado' => 'pendiente',
        'autor' => 'Santiago',
        'categoria_id' => 5,
        ]);
    }
}

>>>>>>> e77b7be8b63c743d78991f74e11d2a1588823968
