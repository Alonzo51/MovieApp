<?php

use Illuminate\Database\Seeder;

use App\Genre;
use App\Movie;

class ExampleData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Populate genres
        $actionGenre = Genre::create(['name' => 'Action']);
        $actionGenre->save();

        $comedyGenre = Genre::create(['name' => 'Comedy']);
        $comedyGenre->save();

        $dramaGenre = Genre::create(['name' => 'Drama']);
        $dramaGenre->save();

        $horrorGenre = Genre::create(['name' => 'Horror']);
        $horrorGenre->save();

        // Populate movies
        $actionGenre->addMovie(
            'Free Guy',
            'https://i0.wp.com/www.artofvfx.com/wp-content/uploads/2020/10/FreeGuy_new_poster.jpg?fit=1280%2C1844&ssl=1',
            550988);
        $actionGenre->addMovie(
            'Eternals',
            'https://artwisher.com/files/products/hd-poster-of-eternals-movie_bwvozm2umzqarawkpjroagxqrwplzwu.1400x1400.jpg?9bac7f1b4038f9f754cdbf5d38d37f1d',
            524434);
        $comedyGenre->addMovie(
            'Don\'t Look Up',
            'https://m.media-amazon.com/images/M/MV5BNjZjNDE1NTYtYTgwZS00M2VmLWEyODktM2FlNjhiYTk3OGU2XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_FMjpg_UX1000_.jpg',
            646380);
        $comedyGenre->addMovie(
            'Deadpool',
            'https://m.media-amazon.com/images/M/MV5BYzE5MjY1ZDgtMTkyNC00MTMyLThhMjAtZGI5OTE1NzFlZGJjXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
            293660);
        $dramaGenre->addMovie(
            '1917', 'https://m.media-amazon.com/images/M/MV5BOTdmNTFjNDEtNzg0My00ZjkxLTg1ZDAtZTdkMDc2ZmFiNWQ1XkEyXkFqcGdeQXVyNTAzNzgwNTg@._V1_UY1200_CR64,0,630,1200_AL_.jpg',
            530915);
        $dramaGenre->addMovie(
            'The Last Duel', 'https://m.media-amazon.com/images/M/MV5BZGExZTUzYWQtYWJjZi00OTI4LTk4OGYtNTA2YzcwMmNiZTMxXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_FMjpg_UX1000_.jpg',
            617653);
        $horrorGenre->addMovie(
            'The Conjuring 2', 'https://m.media-amazon.com/images/M/MV5BZjU5OWVlN2EtODNlYy00MjhhLWI0MDUtMTA3MmQ5MGMwYTZmXkEyXkFqcGdeQXVyNjE5MTM4MzY@._V1_SL1024_.jpg',
            138843);
        $horrorGenre->addMovie(
            'Upgrade', 'https://m.media-amazon.com/images/I/71wTTrjZhBL._AC_SL1500_.jpg',
            500664);
    }
}
