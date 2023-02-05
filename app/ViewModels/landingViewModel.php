<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class landingViewModel extends ViewModel
{
    public $dayTrend , $weekTrend;

    public function __construct($dayTrend , $weekTrend)
    {
        $this->dayTrend = $dayTrend;
        $this->weekTrend = $weekTrend;
    }

    public function dayTrends()
    {
        return $this->trendsFormat($this->dayTrend);
    }

    public function WeekTrends()
    {
        return $this->trendsFormat($this->weekTrend);
    }

    private function trendsFormat($trends)
    {
        return collect($trends['results'])->map(function ($trend){
            return collect($trend)->merge([
                'title' => $trend['title'] ?? $trend['name'],
                'poster_path' => isset($trend['poster_path'])
                    ? 'https://www.themoviedb.org/t/p/w220_and_h330_face/' . $trend['poster_path']
                    : 'https://ui-avatars.com/api/?size=235&name=' . $trend['title'],
                'vote_average' => number_format($trend['vote_average'] * 10) . '%',
                'release_date' => isset($trend['release_date']) ? Carbon::parse($trend['release_date'])->format('M d, Y')
                    : Carbon::parse($trend['first_air_date'])->format('M d, Y'),
                'linkToPage' => $trend['media_type'] == 'tv'
                    ? route('tv.show' , $trend['id'])
                    : route('movies.show' , $trend['id']),
            ]);
        })->take(7);
    }
}