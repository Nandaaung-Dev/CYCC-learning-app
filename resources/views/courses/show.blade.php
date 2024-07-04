@extends('layouts.layout')

@section('content')
    <hr>
    <div class=" w-full bg-slate-100 py-14">
        <div class=" flex justify-center gap-8">
            <div>
                <video class=" w-[1000px] shadow-2xl shadow-[#f3bbe0]" controls>
                    <source class="" src="{{ asset('videos/sample2.mp4') }}" type="video/mp4">
                </video>
                <div class=" w-[1000px] mt-2 ">
                    <h1 class="truncate text-xl font-medium pt-4"> {{ $course->title }}</h1>
                    <p class=" font-light text-slate-500"> {{ $course->description }}</p>
                </div>
            </div>
            <div>Hello</div>
        </div>
    </div>
    <hr class="">
@endsection
