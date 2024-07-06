@extends('layouts.layout')

@section('content')
    <hr>
    <div class=" w-full bg-slate-100 py-14">
        <div class=" flex justify-center gap-8">
            <div>
                <video class=" w-[1000px] shadow-2xl shadow-[#f3bbe0]" controls>
                    <source src="{{ asset('storage/cycc/' . $course->video) }}" type="video/mp4">
                </video>
                <div class=" w-[1000px] mt-2 ">
                    <h1 class="truncate text-xl font-medium pt-4"> {{ $course->title }}</h1>
                    <p class=" font-light text-slate-500"> {{ $course->description }}</p>
                </div>
            </div>
            <div class=" w-80 h-[700px] overflow-y-scroll overflow-x-hidden">
                @foreach ($courses as $item)
                    <a href="{{ route('course.show', ['id' => $item->id]) }}">
                        <div
                            class="mb-4 p-2 px-4 text-[18px] active:bg-[#cd50a1]  bg-[#FAF9FA] hover:bg-[#FB56C2] hover:text-white rounded-md">
                            {{ $item->id }} . {{ $item->title }}
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </div>
    <hr class="">
@endsection
