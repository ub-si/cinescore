<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create(['name' => 'Animação']);
        Genre::create(['name' => 'Aventura']);
        Genre::create(['name' => 'Ação']);
        Genre::create(['name' => 'Comédia']);
        Genre::create(['name' => 'Terror']);
        Genre::create(['name' => 'Romance']);
        Genre::create(['name' => 'Mistério']);
        Genre::create(['name' => 'Documentário']);
        Genre::create(['name' => 'Crime']);
        Genre::create(['name' => 'Drama']);
        Genre::create(['name' => 'Faroeste']);
        Genre::create(['name' => 'Fantasia']);
        Genre::create(['name' => 'Ficção científica']);
        Genre::create(['name' => 'Guerra']);
        Genre::create(['name' => 'História']);
    }
}
