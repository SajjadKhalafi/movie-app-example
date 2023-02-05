<?php

namespace App\Http\Controllers;

use App\ViewModels\landingViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class landingController extends Controller
{
    public function index()
    {
        $trendingOfDay = Http::get('https://api.themoviedb.org/3/trending/all/day?api_key=' . env('TMDB_TOKEN'))
            ->json();

        $trendingOfWeek = Http::get('https://api.themoviedb.org/3/trending/all/week?api_key=' . env('TMDB_TOKEN'))
            ->json();

        $popularTV = Http::get('https://api.themoviedb.org/3/tv/popular?api_key='.env('TMDB_TOKEN'))
            ->json();

        $viewModel = new landingViewModel($trendingOfDay , $trendingOfWeek , $popularTV);
        return view('welcome' , $viewModel);
    }
}
