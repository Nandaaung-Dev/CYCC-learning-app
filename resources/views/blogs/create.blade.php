@extends('layouts.layout')

@section('content')
<div class="flex justify-center">
    <div class=" w-[1000px] bg-slate-200 h-[500px] rounded">
        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data" class=" py-10 px-10 flex flex-col gap-4">
            @csrf
            <div class=" grid grid-cols-12 gap-2">
                <label for="image" class=" text-xl col-span-2">Image :</label>
                <input type="file" name="image" id="image" class=" w-2/3 rounded col-span-10">
            </div>
            <div class=" grid grid-cols-12 gap-2">
                <label for="title" class=" text-xl col-span-2">Title :</label>
                <input type="text" name="title" id="title" class=" w-2/3 rounded col-span-10">
            </div>
            <div class=" grid grid-cols-12">
                <label for="desc" class=" text-xl col-span-2">Description :</label>
                <!-- <textarea name="description" id="desc" class=" w-2/3 rounded col-span-10"></textarea> -->
                <input type="text" name="description" id="description" class=" w-2/3 rounded col-span-10">

            </div>
            <div class="flex justify-end mt-2 px-48">
                <button type="submit" class="p-2 bg-green-300 rounded">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection