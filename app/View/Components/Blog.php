<?php

namespace App\View\Components;

use App\Models\Blog as ModelsBlog;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Blog extends Component
{

    protected $blogs;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
       $this->blogs = ModelsBlog::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog',[
            'blogs' => $this->blogs
        ]);
    }
}
