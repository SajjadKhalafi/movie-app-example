<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
    public $movies;
    public $genres;
    public $page;

    public function __construct($movies, $genres , $page)
    {
        $this->movies = $movies;
        $this->genres = $genres;
        $this->page = $page;
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }

    public function movies()
    {
        if (request()->is('top-rated')){
            $sort = 'vote_average';
        }else{
            $sort = 'popularity';
        }
        return collect($this->movies['results'])->sortByDesc($sort)->map(function ($movie) {
            $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($movie)->merge([
                'title' => $movie['title'] ?? 'Untitled',
                'poster_path' => isset($movie['poster_path'])
                    ? 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path']
                    : 'https://ui-avatars.com/api/?size=235&name=' . $movie['title'],
                'vote_average' => $movie['vote_average'] * 10 . '%',
                'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
            ]);
        });
    }
}
