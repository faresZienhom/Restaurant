<?php

namespace App\View\Components;

use App\Models\categories;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryComponent extends Component
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
        $categories = categories::get();
        return view('components.category-component',compact('categories'));
    }
}
