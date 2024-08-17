<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;

use Illuminate\Contracts\View\View;

class Post extends Component
{
    /**
     * Create a new component instance.
     */

     public $posts;

    public function __construct($posts)
    {
        $this->posts = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post');
    }
}
