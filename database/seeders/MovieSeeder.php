<?php

namespace Database\Seeders;

use App\Enum\MovieRating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $acao = Genre::where('name', 'Ação')->first();
        $comedia = Genre::where('name', 'Comédia')->first();
        $romance = Genre::where('name', 'Romance')->first();
        $aventura = Genre::where('name', 'Aventura')->first();

        $movie1 = Movie::create([
            'user_id' => 1,
            'title' => 'Vingadores: Ultimato',
            'release_date' => '2019-04-26',
            'synopsis' => 'Os Vingadores tentam reverter os danos causados por Thanos.',
            'director' => 'Anthony Russo, Joe Russo',
            'rating' => MovieRating::FOURTEEN,
            'image' => 'vingadores-ultimato.jpg',
        ]);
        $movie1->genres()->attach($acao);

        $movie2 = Movie::create([
            'user_id' => 1,
            'title' => 'A Culpa é das Estrelas',
            'release_date' => '2014-06-06',
            'synopsis' => 'Dois adolescentes se apaixonam enquanto enfrentam a luta contra o câncer.',
            'director' => 'Josh Boone',
            'rating' => MovieRating::FOURTEEN,
            'image' => 'culpa-estrelas.jpg',
        ]);
        $movie2->genres()->attach($romance);

        $movie3 = Movie::create([
            'user_id' => 1,
            'title' => 'Jurassic Park',
            'release_date' => '1993-06-11',
            'synopsis' => 'Um parque de dinossauros geneticamente modificados sai do controle.',
            'director' => 'Steven Spielberg',
            'rating' => MovieRating::EIGHTEEN,
            'image' => 'jurassic-park.jpg',
        ]);
        $movie3->genres()->attach($aventura);
    }
}
