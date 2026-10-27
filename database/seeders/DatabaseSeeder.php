<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
<<<<<<< HEAD
            CategoriaSeeder::class,
            IdeaSeeder::class,
        ]);
=======
 CategoriaSeeder::class,
 IdeaSeeder::class,
 ]);
>>>>>>> e77b7be8b63c743d78991f74e11d2a1588823968
    }
}
