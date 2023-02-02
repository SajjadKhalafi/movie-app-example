<?php

namespace App\Http\Controllers;

use App\ViewModels\MoviesViewModel;
use App\ViewModels\MovieViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page = 1)
    {
//        abort_if($page > 500 , 204);

        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular?api_key='.env('TMDB_TOKEN') . '&page=' . $page)
            ->json();

        $genres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key='.env('TMDB_TOKEN'))
            ->json()['genres'];

        $viewModel = new MoviesViewModel($popularMovies, $genres , $page);

        return view('movies.index' , $viewModel);
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
        $movie = Http::get('https://api.themoviedb.org/3/movie/'.$id.'?api_key='.env('TMDB_TOKEN').'&append_to_response=credits,videos,images')
            ->json();

        $viewModel = new MovieViewModel($movie);
        return view('movies.show' , $viewModel);
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

    public function nowPlaying($page = 1)
    {
        $nowPlaying = Http::get('https://api.themoviedb.org/3/movie/now_playing?api_key='.env('TMDB_TOKEN') . '&page=' . $page)
            ->json();

        $genres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key='.env('TMDB_TOKEN'))
            ->json()['genres'];

        $viewModel = new MoviesViewModel($nowPlaying, $genres , $page);

        return view('movies.now-playing' , $viewModel);
    }

    public function upcoming($page = 1)
    {
        $upcoming = Http::get('https://api.themoviedb.org/3/movie/upcoming?api_key='.env('TMDB_TOKEN') . '&page=' . $page)
            ->json();

        $genres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key='.env('TMDB_TOKEN'))
            ->json()['genres'];

        $viewModel = new MoviesViewModel($upcoming, $genres , $page);

        return view('movies.upcoming' , $viewModel);
    }

    public function topRated($page = 1)
    {
        $topRated = Http::get('https://api.themoviedb.org/3/movie/top_rated?api_key='.env('TMDB_TOKEN') . '&page=' . $page)
            ->json();

        $genres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key='.env('TMDB_TOKEN'))
            ->json()['genres'];

        $viewModel = new MoviesViewModel($topRated, $genres , $page);

        return view('movies.top-rated' , $viewModel);
    }
}
