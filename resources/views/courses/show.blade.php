@extends('layouts.layout')

@section('content')
<hr>
<div class="w-full bg-slate-100 py-14">
    <div class="flex justify-center gap-8">
        <div>
            <!-- Ensure $video is a single video path and $course is available -->
            @if(isset($video))
            <video class="w-[1000px] shadow-2xl shadow-[#f3bbe0]" controls>
                <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
            </video>
            @endif
            <div class="w-[1000px] mt-2">
                <!-- Ensure $course is available -->
                @if(isset($course))
                <h1 class="truncate text-xl font-medium pt-4">{{ $course->title }}</h1>
                <p class="font-light text-slate-500">{{ $course->description }}</p>
                @endif
            </div>
        </div>
        <div class="w-80 h-[700px] overflow-y-auto overflow-x-hidden cus">
            @foreach ($videos as $index => $item)
            <a href="{{ route('course.show', ['id' => $course->id, 'videoId' => $item->id]) }}">
                <div class="mb-4 p-2 px-4 text-[18px] active:bg-[#cd50a1] bg-[#FAF9FA] hover:bg-[#FB56C2] hover:text-white h-14 overflow-auto rounded-md">
                    {{ $index + 1 }} .Lesson - {{ $index + 1 }}
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
<hr>
@endsection

<style>
    .hide::-webkit-scrollbar {
        display: none;
        /* For Chrome, Safari, and Opera */
    }

    .cus::-webkit-scrollbar {
        width: 16px;
        /* Width of the entire scrollbar */
    }

    .cus::-webkit-scrollbar-track {
        background: whitesmoke;
        /* Color of the track (scrollbar background) */
        border-radius: 6px;
        /* Rounded corners */
        border: 3px solid #f1f1f1;
        /* Padding around the track */
    }

    .cus::-webkit-scrollbar-thumb {
        background-color: #f87dcd;
        /* Color of the thumb (scrollbar handle) */
        border-radius: 6px;
        /* Rounded corners */
        border: 3px solid #f1f1f1;
        /* Padding around the thumb */
    }

    .cus::-webkit-scrollbar-thumb:hover {
        background-color: #d0398f;
        /* Color of the thumb when hovered */
    }
</style>