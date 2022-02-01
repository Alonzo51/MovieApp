<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function getRandomMovie(int $movieToExclude = -1): Movie
    {
        $movies = Movie::where('genre', '=', $this->id)->get();
        $allowedSuggestedMovies = [];

        // remove movie that should be excluded
        foreach ($movies as $movieKey => $movie)
        {
            if ($movie->id !== $movieToExclude)
            {
                $allowedSuggestedMovies[] = $movie;
            }
        }

        $suggestedMovie = $allowedSuggestedMovies[ rand(0, count($allowedSuggestedMovies) - 1) ];

        return $suggestedMovie;
    }

    /**
     * Adds movie to genre.
     *
     * @return Genre
     */
    public function addMovie(string $name, string $boxart, int $additionalApiDataId): Genre
    {
        Movie::create([
            'name' => $name,
            'boxart' => $boxart,
            'additionalApiDataId' => $additionalApiDataId,
            'genre' => $this->id
        ])->save();

        return $this;
    }
}
