<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TvViewModel extends ViewModel
{
    public $shows;
    public $genres;

    public function __construct($shows, $genres)
    {
        $this->shows = $shows;
        $this->genres = $genres;
    }

    public function genres()
    {
        return collect($this->genres['genres'])->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }

    public function tvShows()
    {
        if (request()->is('tv-top-rated')){
            $sort = 'vote_average';
        }else{
            $sort = 'popularity';
        }

        return collect($this->shows['results'])->sortByDesc($sort)->map(function ($tvShow) {
            $genresFormatted = collect($tvShow['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($tvShow)->merge([
                'poster_path' => isset($tvShow['poster_path'])
                    ? 'https://image.tmdb.org/t/p/w500/' . $tvShow['poster_path']
                    : 'https://ui-avatars.com/api/?size=235&name=' . $tvShow['name'],
                'vote_average' => $tvShow['vote_average'] * 10 . '%',
                'first_air_date' => Carbon::parse($tvShow['first_air_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
            ]);
        });
    }
}
