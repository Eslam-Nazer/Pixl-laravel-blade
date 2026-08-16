<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArtistsToFollow extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $artists = [
            ['name' => 'alessia_draws', 'img' => 'alessia.png',],
            ['name' => 'just_anne', 'img' => 'anne.png',],
            ['name' => 'Mr. Anderson', 'img' => 'mr-anderson.png',],
            ['name' => 'Michael', 'img' => 'michael.png',]
        ];
        return view('components.artists-to-follow', compact('artists'));
    }
}
