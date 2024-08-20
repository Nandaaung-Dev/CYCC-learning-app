@vite('resources/css/app.css')
<x-nav></x-nav>
<div class="bg-slate-300 min-h-screen font-dm-sans">
    <div class="container mx-auto w-[40%] p-10">
        <h3 class="text-2xl">Upload Video</h3>
        <hr>
        <form method="POST" action="{{ route('course.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="space-y-6 py-4">
                <div>
                    <label for="course">Select Course <span class="text-red-600">*</span></label> <br>
                    <select name="course_id" id="course" required>
                        @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label>Choose Video <span class="text-red-600">*</span></label> <br>
                    <input type="file" name="video" required>
                </div>
            </div>
            <div class="flex justify-start mt-2">
                <button type="submit" class="p-2 bg-green-300 rounded">Submit</button>
            </div>
        </form>
    </div>
</div>