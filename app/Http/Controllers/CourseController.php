<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function list()
    {
        $data = Course::query()->paginate(12);
        return view('courses.list', [
            'courses' => $data
        ]);
    }

    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show', [
            'course' => $course
        ]);
    }
}
