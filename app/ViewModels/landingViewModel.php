<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Spatie\ViewModels\ViewModel;

class landingViewModel extends ViewModel
{
    public $heroBg, $dayTrend, $weekTrend, $streaming, $popularTv, $rentMovie, $theater, $freeMovie, $freeTV;

    public function __construct($heroBg, $dayTrend, $weekTrend, $streaming, $popularTv, $rentMovie, $theater, $freeMovie, $freeTV)
    {
        $this->heroBg = $heroBg;
        $this->dayTrend = $dayTrend;
        $this->weekTrend = $weekTrend;
        $this->streaming = $streaming;
        $this->popularTv = $popularTv;
        $this->rentMovie = $rentMovie;
        $this->theater = $theater;
        $this->freeMovie = $freeMovie;
        $this->freeTV = $freeTV;
    }

    public function bgImage()
    {
        return collect($this->heroBg['results'])->map(function ($movie) {
            return collect($movie)->merge([
                'poster_path' => "https://www.themoviedb.org/t/p/w1920_and_h600_multi_faces_filter(duotone,00192f,00baff)$movie[poster_path]"
            ]);
        })->random();
    }

    public function streamTrailers()
    {
        return collect($this->streaming['results'])->map(function ($movie) {
//            $movieId =  collect($movie['id']);
            return collect($movie['id'])->map(function ($id) {
                $film = Http::get('https://api.themoviedb.org/3/movie/' . $id . '?append_to_response=videos,images&api_key=' . env('TMDB_TOKEN'))
                    ->json();
                return collect($film)->merge([
                    'backdrops' => collect($film['images']['backdrops'])->take(1),
                    'video' => collect($film['videos']['results'])
                        ->where('type' , 'Trailer')
                        ->sortByDesc('published_at')
                        ->take(1)
                ]);
            });
        })->take(20);
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
