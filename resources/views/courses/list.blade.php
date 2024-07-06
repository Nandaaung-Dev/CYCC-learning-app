@extends('layouts.layout')

@section('content')
    <div class="mb-[40px]" style="border-bottom: 4px solid var(--Secondary, #FAF9FA);"></div>
    @if (!$courses->count())
        <div class=" flex justify-center">
            <img src="{{ asset('images/no_data.jpg') }}" alt="" srcset="" class=" w-[40%]">
        </div>
    @else
        <div class=" container mx-auto">
            <x-course-card :courses="$courses"></x-course-card>
            <div class="flex justify-end mt-2 text-[#FB56C2] font-mono"> {{ $courses->links() }}</div>
        </div>
    @endif

    <div class="my-[40px]" style="border-bottom: 4px solid var(--Secondary, #FAF9FA);"></div>
@endsection
