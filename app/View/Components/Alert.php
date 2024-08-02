<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $radius;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $radius)
    {
        $this->type = $type;
        $this->radius = $radius;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert', [
            "type" => $this->type,
            "radius" => $this->radius
        ]);
    }
}
