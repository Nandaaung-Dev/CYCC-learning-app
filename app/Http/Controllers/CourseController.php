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


        $courses = Course::all();
        $course = Course::find($id);
        return view('courses.show', [
            'course' => $course,
            'courses' => $courses
        ]);
    }

    public function create()
    {
        return view('courses.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'duration' => 'required',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        // dd("here");


        $course = new Course;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->rating = 10;
        $course->reviews = 200;

        if ($request->hasFile('video')) {
            // $path = $request->file('video')->store('videos', ['disk' => 'cycc']);
            $path = $request->file('video')->store('videos', 'cycc');

            $course->video = $path;
        }
        $course->save();
    }
}
