<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class landingViewModel extends ViewModel
{
    public $dayTrend, $weekTrend, $streaming, $popularTv, $rentMovie, $theater, $freeMovie, $freeTV;

    public function __construct($dayTrend, $weekTrend, $streaming, $popularTv, $rentMovie, $theater, $freeMovie, $freeTV)
    {
        $this->dayTrend = $dayTrend;
        $this->weekTrend = $weekTrend;
        $this->streaming = $streaming;
        $this->popularTv = $popularTv;
        $this->rentMovie = $rentMovie;
        $this->theater = $theater;
        $this->freeMovie = $freeMovie;
        $this->freeTV = $freeTV;
    }

    public function dayTrends()
    {
        return $this->formatMovies($this->dayTrend);
    }

    public function weekTrends()
    {
        return $this->formatMovies($this->weekTrend);
    }

    public function streamMovies()
    {
        return $this->formatMovies($this->streaming);
    }

    public function popularTvs()
    {
        return $this->formatMovies($this->popularTv);
    }

    public function rentMovies()
    {
        return $this->formatMovies($this->rentMovie);
    }

    public function theaterMovies()
    {
        return $this->formatMovies($this->theater);
    }

    public function freeMovies()
    {
        return $this->formatMovies($this->freeMovie);
    }

    public function freeSeries()
    {
        return $this->formatMovies($this->freeTV);
    }

    private function formatMovies($movies)
    {
        return collect($movies['results'])->map(function ($trend) {
            return collect($trend)->merge([
                'title' => $trend['title'] ?? $trend['name'],
                'poster_path' => isset($trend['poster_path'])
                    ? 'https://www.themoviedb.org/t/p/w220_and_h330_face/' . $trend['poster_path']
                    : 'https://ui-avatars.com/api/?size=235&name=' . $trend['title'],
                'vote_average' => number_format($trend['vote_average'] * 10) . '%',
                'release_date' => isset($trend['release_date']) ? Carbon::parse($trend['release_date'])->format('M d, Y')
                    : Carbon::parse($trend['first_air_date'])->format('M d, Y'),
                'linkToPage' => isset($trend['first_air_date'])
                    ? route('tv.show', $trend['id'])
                    : route('movies.show', $trend['id']),
            ]);
        })->sortByDesc('vote_average')->take(7);
    }
}
