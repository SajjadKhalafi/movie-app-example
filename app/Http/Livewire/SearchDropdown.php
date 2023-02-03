<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults = [];
        if (strlen($this->search) >= 2) {
            $searchResults = Http::get('https://api.themoviedb.org/3/search/multi/?api_key=' . env('TMDB_TOKEN') . '&query=' . $this->search)
                ->json()['results'];
        }
        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7)->map(function ($movie){

                $title = $movie['title'] ?? $movie['name'];

                if(isset($movie['profile_path'])){
                    $poster_path = 'https://image.tmdb.org/t/p/w92/' . $movie['profile_path'];
                }elseif(isset($movie['poster_path'])){
                    $poster_path = 'https://image.tmdb.org/t/p/w92' . $movie['poster_path'];
                }else{
                    $poster_path = 'https://ui-avatars.com/api/?size=235&name=' . $title;
                }

                return collect($movie)->merge([
                    'title' => $title,
                    'poster_path' => $poster_path,
                    'linkToPage' => match ($movie['media_type']){
                        'tv' => route('tv.show' , $movie['id']),
                        'movie' => route('movies.show' , $movie['id']),
                        'person' => route('actors.show' , $movie['id']),
                    }
                ]);
            })
        ]);
    }
}
