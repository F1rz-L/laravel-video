<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Test extends Component
{
    /**
     * Create a new component instance.
     */

    public $label;
    public $type;

    public function __construct($label='Unknown', $type='text')
    {
        $this->label = $label;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.test');
    }
}
