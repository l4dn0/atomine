<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Primary extends Component
{
    public $link;
    public $content;
    /**
     * Create a new component instance.
     */
    public function __construct($link, $content)
    {
        $this->link = $link;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons.primary');
    }
}
