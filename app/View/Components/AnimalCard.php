<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AnimalCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $animal;

    public function __construct($animal)
    {
        $this->animal = $animal;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.animal-card');
    }
}
