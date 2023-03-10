<?php

namespace App\Http\Controllers;

use App\ViewModels\landingViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class landingController extends Controller
{
    public function index()
    {
        $heroBg = Http::get('https://api.themoviedb.org/3/discover/movie?sort_by=vote_count.desc&release_date.lte=2021-12-30&vote_average.gte=7.8&vote_average.lte=9.9&with_watch_monetization_types=flatrate&language=en-US&api_key=' . env('TMDB_TOKEN'))
            ->json();

        $trendingOfDay = Http::get('https://api.themoviedb.org/3/trending/all/day?api_key=' . env('TMDB_TOKEN'))
            ->json();

        $trendingOfWeek = Http::get('https://api.themoviedb.org/3/trending/all/week?api_key=' . env('TMDB_TOKEN'))
            ->json();

        $streamingMovies = Http::get('https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&release_date.gte=' . date('Y-m-d', strtotime("-30 days")) . '&release_date.lte=' . date('Y-m-d') . '&vote_average.gte=6.5&vote_average.lte=9.2&with_watch_providers=8%7C9%7C337%7C350%7C118%7C384%7C15&watch_region=US&api_key=' . env('TMDB_TOKEN'))
            ->json();

        $popularTV = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=' . env('TMDB_TOKEN'))
            ->json();

        $rentMovies = Http::get('https://api.themoviedb.org/3/discover/movie/?with_watch_providers=8|9|337|350|118|384|15&watch_region=US&with_watch_monetization_types=rent&sort_by=popularity.desc&api_key=' . env('TMDB_TOKEN'))
            ->json();

        $theatersMovies = Http::get('https://api.themoviedb.org/3/discover/movie?primary_release_date.gte=' . date('Y-m-d', strtotime("-1 days")) . '&primary_release_date.lte=' . date('Y-m-d', strtotime("+40 days")) . '&watch_region=US&sort_by=vote_average.desc&api_key=' . env('TMDB_TOKEN'))
            ->json();

        $freeMovies = Http::get('https://api.themoviedb.org/3/discover/movie/?with_watch_providers=8|9|337|350|118|384|15&watch_region=US&with_watch_monetization_types=free&sort_by=popularity.desc&api_key=' . env('TMDB_TOKEN'));

        $freeTV = Http::get('https://api.themoviedb.org/3/discover/tv?sort_by=popularity.desc&page=1&timezone=America%2FNew_York&include_null_first_air_dates=false&with_watch_providers=8%7C9%7C337%7C350%7C118%7C384%7C15&watch_region=US&with_watch_monetization_types=free&with_status=3&with_type=4&api_key=' . env('TMDB_TOKEN'));

        $viewModel = new landingViewModel( $heroBg, $trendingOfDay, $trendingOfWeek, $streamingMovies, $popularTV, $rentMovies, $theatersMovies , $freeMovies , $freeTV);
        return view('welcome', $viewModel);
    }
}
