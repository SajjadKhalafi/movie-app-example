<?php

namespace App\Http\Controllers;

use App\ViewModels\TvShowViewModel;
use App\ViewModels\TvViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularTV = Http::get('https://api.themoviedb.org/3/tv/popular?api_key='.env('TMDB_TOKEN'))
            ->json();

        $genres = Http::get('https://api.themoviedb.org/3/genre/tv/list?api_key='.env('TMDB_TOKEN'))
            ->json();

        $viewModel = new TvViewModel($popularTV, $genres);
        return view('tv.index' , $viewModel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tvshow = Http::get('https://api.themoviedb.org/3/tv/'.$id.'?api_key='.env('TMDB_TOKEN').'&append_to_response=credits,videos,images')
            ->json();

        $viewModel = new TvShowViewModel($tvshow);
        return view('tv.show' , $viewModel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function airing_today()
    {
        $airingToday = Http::get('https://api.themoviedb.org/3/tv/airing_today?api_key='.env('TMDB_TOKEN'))
            ->json();

        $genres = Http::get('https://api.themoviedb.org/3/genre/tv/list?api_key='.env('TMDB_TOKEN'))
            ->json();

        $viewModel = new TvViewModel($airingToday , $genres);
        return view('tv.airing-today' , $viewModel);
    }

    public function on_tv()
    {
        $onTheAir = Http::get('https://api.themoviedb.org/3/tv/on_the_air?api_key='.env('TMDB_TOKEN'))
            ->json();

        $genres = Http::get('https://api.themoviedb.org/3/genre/tv/list?api_key='.env('TMDB_TOKEN'))
            ->json();

        $viewModel = new TvViewModel($onTheAir , $genres);
        return view('tv.on-tv' , $viewModel);
    }

    public function top_rated()
    {
        $topRated = Http::get('https://api.themoviedb.org/3/tv/top_rated?api_key='.env('TMDB_TOKEN'))
            ->json();

        $genres = Http::get('https://api.themoviedb.org/3/genre/tv/list?api_key='.env('TMDB_TOKEN'))
            ->json();

        $viewModel = new TvViewModel($topRated , $genres);
        return view('tv.top-rated' , $viewModel);
    }
}
