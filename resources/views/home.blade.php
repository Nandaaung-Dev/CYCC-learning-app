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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />


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

    <a href="" class=" cursor-pointer">
        <div class=" relative">
            <img src="{{ asset('images/banner.png') }}" alt="" srcset=""
                class=" relative">

        </div>
    </a>
    <x-footer />


    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

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