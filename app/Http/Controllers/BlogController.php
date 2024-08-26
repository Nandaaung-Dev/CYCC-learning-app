<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            // Store the image in storage/app/public/blog/image directory
            $path = $request->file('image')->storeAs('public/blog/image', $imageName);
        }

        Blog::create([
            'image' => $imageName,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Redirect or return a response
        return redirect('/')->with('success', 'Blog post created successfully!');
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->back()->with('success', 'Blog post deleted successfully.');
    }
}
