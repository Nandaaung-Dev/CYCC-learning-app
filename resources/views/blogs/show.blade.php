@extends('layouts.layout')

@section('content')
<div class=" bg-slate-100">
    <div class=" px-2 py-4 container mx-auto border">
        <img src="{{ asset('storage/blog/image/' . $blog->image) }}" alt="Blog Image" class=" blog">
        <h1 class=" text-2xl py-2 font-medium"> {{ $blog->title}}</h1>
        <p> &nbsp;&nbsp;&nbsp;&nbsp;{{ $blog->description }}</p>
    </div>
</div>
@endsection

<style>
    .blog {
        width: 1024px;
    }
</style>