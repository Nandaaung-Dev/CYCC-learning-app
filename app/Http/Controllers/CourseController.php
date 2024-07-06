<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return view('courses.create', [
            'courses' => Course::query()->paginate(5)
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255|unique:courses,title',
            'description' => 'required',
            'duration' => 'required',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        $course = new Course;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->rating = rand(1, 5);
        $course->reviews = rand(1, 1000);

        if ($request->hasFile('video')) {
            $path = $request->file('video')->store('videos', 'cycc');

            $course->video = $path;
        }
        $course->save();

        return view('courses.create', [
            'courses' => Course::query()->paginate(5)
        ]);
    }
    public function destroy(Course $course)
    {
        $course->delete();
        // Optionally, redirect back or to a specific route after deletion
        return back();
    }
}
