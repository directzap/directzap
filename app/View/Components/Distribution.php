<?php

namespace App\View\Components;

use App\Models\Configuration;
use Illuminate\View\Component;

class Distribution extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $config = Configuration::where('user_id', auth()->user()->id)->first();
        return view('components.distribution', [
            'config' => $config,
        ]);
    }
}
