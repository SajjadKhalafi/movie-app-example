<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TrendingCard extends Component
{
    public $trend;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($trend)
    {
        $this->trend = $trend;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.trending-card');
    }
}
