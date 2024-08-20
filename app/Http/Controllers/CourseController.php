<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin')->except(['list', 'show']);
    }
    public function list()
    {
        $data = Course::query()->paginate(12);
        return view('courses.list', [
            'courses' => $data
        ]);
    }

    public function show($id, $videoId)
    {
        // Find the course by its ID
        $course = Course::findOrFail($id);

        // Retrieve associated videos for the course
        $videos = $course->videos()->get(); // Fetch all videos related to the course

        // Find the specific video by its ID
        $video = $videos->find($videoId);

        // Pass data to the view
        return view('courses.show', [
            'course' => $course,
            'videos' => $videos,
            'video' => $video, // Pass the specific video
        ]);
    }

    public function create()
    {
        return view('courses.create', [
            'courses' => Course::all()
        ]);
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'video' => 'nullable|file|mimes:mp4,avi,mov|max:20480', // Validate file (optional)
        ]);

        // Find the course by its ID
        $course = Course::findOrFail($request->input('course_id'));

        // Check if a video file was uploaded
        if ($request->hasFile('video')) {
            // Store the uploaded video file
            $path = $request->file('video')->store('videos', 'public');

            // Create a new video record
            $video = new Video();
            $video->path = $path; // Ensure your Video model has a `path` attribute
            $video->course_id = $course->id; // Associate the video with the course
            $video->save();
        }

        // Redirect or return a view with a success message
        return redirect()->route('home')->with('success', 'Video uploaded and course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        // Optionally, redirect back or to a specific route after deletion
        return back();
    }
}
