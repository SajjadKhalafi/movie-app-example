<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MovieViewModel extends ViewModel
{
    public $movie;

    public function __construct($movie)
    {
        $this->movie = $movie;
    }

    public function movie()
    {
        return collect($this->movie)->merge([
            'title' => $this->movie['title'] ?? 'Untitled',
            'poster_path' => isset($this->movie['poster_path'])
                ? 'https://image.tmdb.org/t/p/w500/' . $this->movie['poster_path']
                : 'https://ui-avatars.com/api/?size=235&name=' . $this->movie['title'],
            'vote_average' => $this->movie['vote_average'] * 10 . '%',
            'release_date' => Carbon::parse($this->movie['release_date'])->format('M d, Y'),
            'genres' => collect($this->movie['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->movie['credits']['crew'])->where('department', 'Writing')
                ->whereBetween('job', ['Director', 'Screenplay'])
                ->take(4),
            'cast' => collect($this->movie['credits']['cast'])->take(5)->map(function ($cast){
                return collect($cast)->merge([
                    'profile_path' => $cast['profile_path']
                        ? 'https://image.tmdb.org/t/p/w500/' . $cast['profile_path']
                        : 'https://ui-avatars.com/api/?size=500&name=' . $cast['name'],
                    'name' => $cast['name'] ?? "John Doe",
                    'character' => $cast['character'] ?? "Self",
                ]);
            }),
            'backdrops' => collect($this->movie['images']['backdrops'])->take(9),
        ]);
    }
}
