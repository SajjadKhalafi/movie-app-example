<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class ActorViewModel extends ViewModel
{
    public $actor;
    public $credits;
    public $social;

    public function __construct($actor, $social, $credits)
    {
        $this->actor = $actor;
        $this->social = $social;
        $this->credits = $credits;
    }

    public function actor()
    {
        return collect($this->actor)->merge([
            'profile_path' => $this->actor['profile_path']
                ? 'https://image.tmdb.org/t/p/w300_and_h450_bestv2' . $this->actor['profile_path']
                : 'https://ui-avatars.com/api/?size=235&name=' . $this->actor['name'],
            'birthday' => Carbon::parse($this->actor['birthday'])->format('M d, Y'),
            'age' => Carbon::parse($this->actor['birthday'])->age,
        ]);
    }

    public function social()
    {
        return collect($this->social)->merge([
            'twitter' => $this->social['twitter_id'] ? 'https://twitter.com/' . $this->social['twitter_id'] : null,
            'instagram' => $this->social['instagram_id'] ? 'https://www.instagram.com/' . $this->social['instagram_id'] : null,
            'facebook' => $this->social['facebook_id'] ? 'https://www.facebook.com/' . $this->social['facebook_id'] : null,
        ]);
    }

    public function knownForMovies()
    {
        $castMovies = collect($this->credits)->get('cast');
        return collect($castMovies)->sortByDesc('popularity')->take(5)->map(function ($movie) {
                if (isset($movie['title'])){
                    $title = $movie['title'];
                }elseif (isset($movie['name'])){
                    $title = $movie['name'];
                }else{
                    $title = "Untitled";
                }

                return collect($movie)->merge([
                    'poster_path' => 'https://image.tmdb.org/t/p/w150_and_h225_bestv2/' . $movie['poster_path'],
                    'title' => $title,
                    'linkToPage' => $movie['media_type'] == 'movie'
                        ? route('movies.show' , $movie['id'])
                        : route('tv.show' , $movie['id']),
                ]);
        });
    }

    public function credits()
    {
        $castMovies = collect($this->credits)->get('cast');

        return collect($castMovies)->map(function ($movie) {
            if (isset($movie['release_date'])) {
                $releaseDate = $movie['release_date'];
            } elseif (isset($movie['first_air_date'])) {
                $releaseDate = $movie['first_air_date'];
            } else {
                $releaseDate = '';
            }

            if (isset($movie['title'])) {
                $title = $movie['title'];
            } elseif (isset($movie['name'])) {
                $title = $movie['name'];
            } else {
                $title = 'Untitled';
            }

            return collect($movie)->merge([
                'release_date' => $releaseDate,
                'release_year' => Carbon::parse($releaseDate)->format('Y') ?? 'Future',
                'title' => $title,
                'character' => $movie['character'] ?? '',
                'linkToPage' => $movie['media_type'] == 'movie'
                    ? route('movies.show' , $movie['id'])
                    : route('tv.show' , $movie['id']),
            ]);
        })->sortByDesc('release_date')->takeWhile(function ($release) {
            return $release['release_date'];
        });
    }
}
