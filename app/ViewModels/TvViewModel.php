<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TvViewModel extends ViewModel
{
    public $popularTV;
    public $topRated;
    public $genres;

    public function __construct($popularTV, $topRated, $genres)
    {
        $this->popularTV = $popularTV;
        $this->topRated = $topRated;
        $this->genres = $genres;
    }

    public function popularTv()
    {
        return $this->formatTv($this->popularTV);
    }

    public function topRated()
    {
        return $this->formatTv($this->topRated);
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }

    private function formatTv($tv)
    {
        return collect($tv)->map(function ($tvShow) {
            $genresFormatted = collect($tvShow['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($tvShow)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $tvShow['poster_path'],
                'vote_average' => $tvShow['vote_average'] * 10 . '%',
                'first_air_date' => Carbon::parse($tvShow['first_air_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
            ]);
        });
    }
}
