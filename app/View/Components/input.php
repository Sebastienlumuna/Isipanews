<?php

namespace App\View\Components;

use Closure;
use Dotenv\Parser\Value;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $label,
        public string $type = 'text',
        public ?string $id = null,
        public ?string $value= null,
    )
    {
        $this->id ??= $this->name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
