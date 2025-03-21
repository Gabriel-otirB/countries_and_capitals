<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MainComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public string $pageTitle;

    public function __construct(string $pageTitle)
    {
        $this->pageTitle = $pageTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-component');
    }
}
