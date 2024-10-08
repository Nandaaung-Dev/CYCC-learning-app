<?php

namespace App\View\Components;

use App\Models\Course;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Features extends Component
{

    protected $courses;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->courses = Course::query()->paginate(8);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.features', [
            'courses' => $this->courses
        ]);
    }
}
