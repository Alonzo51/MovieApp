<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppController extends Controller
{
    /**
     * Returns app form and movie data view.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $genres = Genre::all();

        return view('app', [
            'genres' => $genres
        ]);
    }

    /**
     * Gets a random movie from the provided genre.
     *
     * @param Request $request
     * @param Genre $genre
     * @return View
     */
    public function getRandomMovieFromGenre(Request $request, Genre $genre): View
    {
        $currentMovie = filter_var($request->input('currentMovie'), FILTER_SANITIZE_NUMBER_INT);
        $movie = $genre->getRandomMovie((int) $currentMovie);

        return view('movieData', [
            'movie' => $movie
        ]);
    }
}
