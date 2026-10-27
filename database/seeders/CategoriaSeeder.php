<?php
namespace Database\Seeders;
use App\Models\Categoria;
use Illuminate\Database\Seeder;
class CategoriaSeeder extends Seeder
{
<<<<<<< HEAD
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'Tecnología',
            'descripcion' => 'Ideas relacionadas con tecnología y
            software.'
        ]);

        Categoria::create([
            'nombre' => 'Educación',
            'descripcion' => 'Ideas relacionadas con educación y
            aprendizaje.'
        ]);

        Categoria::create([
            'nombre' => 'Salud',
            'descripcion' => 'Ideas relacionadas con salud y
            bienestar.'
        ]);

        Categoria::create([
            'nombre' => 'Medio ambiente',
            'descripcion' => 'Ideas relacionadas con el cuidado
            del medio ambiente.'
        ]);
    }
}
=======
 public function run(): void
 {
 Categoria::create([
 'nombre' => 'Tecnología',
 'descripcion' => 'Ideas relacionadas con tecnología y
software.'
 ]);
 Categoria::create([
 'nombre' => 'Educación',
 'descripcion' => 'Ideas relacionadas con educación y
aprendizaje.'
 ]);
 Categoria::create([
 'nombre' => 'Salud',
 'descripcion' => 'Ideas relacionadas con salud y
bienestar.'
 ]);
 Categoria::create([
 'nombre' => 'Medio ambiente',
 'descripcion' => 'Ideas relacionadas con el cuidado
del medio ambiente.'
 ]);

 Categoria::create([
    'nombre' => 'Intercambios',
    'descripcion' => 'Ideas relacionadas con la movilidad estudiantil'
 ]);
 }
}
>>>>>>> e77b7be8b63c743d78991f74e11d2a1588823968
