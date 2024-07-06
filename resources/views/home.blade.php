<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CYCC Online Learning</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400&display=swap" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <!-- stylesheet -->
    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}">

    @vite('resources/css/app.css')
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="font-dm-sans">

    <div class="" id='home'>
        <x-nav></x-nav>
    </div>
    {{-- <div class="w-full h-[500px] bg-[#FEEEEE]"></div> --}}
    <a href="" class=" cursor-pointer"> <img src="{{ asset('images/banner.png') }}" alt="" srcset=""
            class="">
    </a>

    <div class="">
        <x-features></x-features>
    </div>
    <div class="my-[80px]" style="border-bottom: 4px solid var(--Secondary, #FAF9FA);"></div>
    <x-blog />
    <div class="my-[80px]" style="border-bottom: 4px solid var(--Secondary, #FAF9FA);"></div>
    <x-about />
    <div class="my-[20px]" style="border-bottom: 4px solid var(--Secondary, #FAF9FA);"></div>
    <x-contact />
    <x-footer />



</body>

</html>
<style>
    .toast-error {
        background-color: rgb(240, 57, 57);
    }

    .toast-title {
        display: none
    }
</style>
