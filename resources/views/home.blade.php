<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CYCC Online Learning</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400&display=swap" />

    @vite('resources/css/app.css')
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="font-dm-sans">
    <div class=" fixed bottom-10 right-10">
        <a href="#nav">Logo</a>
    </div>
    <div class="">
        <x-nav></x-nav>
    </div>
    <div class="w-full h-[500px] bg-[#FEEEEE]"></div>
    <div class="">
        <x-features></x-features>
    </div>
    <div class="my-[80px]" style="border-bottom: 4px solid var(--Secondary, #FAF9FA);"></div>
    <x-blog />
    <div class="my-[80px]" style="border-bottom: 4px solid var(--Secondary, #FAF9FA);"></div>
    <x-about />
</body>

</html>
