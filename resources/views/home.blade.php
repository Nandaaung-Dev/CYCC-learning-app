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

    <div class=" container mx-auto px-[1%]">
        <div class=" flex justify-between items-center mt-[20px]">
            <div class=" text-lg sm:text-3xl  font-bold px-[20px]"
                style="border-left: 8px solid var(--Primary-color, #FB56C2);">
                Our Team
            </div>
        </div>
    </div>

    <div class="w-[90%] mx-auto px-[6%] h-auto my-4">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-xl h-[260px]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <!-- <img src="{{ asset('images/banner.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> -->
                    <div class=" w-full bg-gradient-to-r from-[#fce3f3] via-[#fef8fc] to-[#FFF]   h-full flex items-center px-4 gap-4">
                        <div class=" w-1/2 bg-slate-50 flex justify-center p-1 rounded-full">
                            <img src="{{ asset('images/slide.jpg') }}" alt="" srcset="" class="rounded-full object-cover">

                        </div>
                        <div>
                            <h1 class=" text-2xl">Crystal </h1>
                            <p class=" text-base text-slate-700">Hi there, I’m Crystal. For the past 3 years I’ve been teaching Mandarin online to students adults at all levels, beginners to advanced. As an English learner, I know how scary it can be learning and practicing languages so I make my lessons fun, clear and easy to understand. I tailor my lessons to students who want to improve their Chinese speaking skills. If you want to speak Mandarin naturally, feel free to join my spoken course!</p>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class=" w-full bg-gradient-to-r from-[#fce3f3] via-[#fef8fc] to-[#FFF]   h-full flex items-center px-4 gap-4">
                        <img src="{{ asset('images/Cheng_Yinghui.jpg') }}" alt="" srcset="" class=" w-40 h-40 rounded-full object-cover border-dashed border-4 border-slate-400">
                        <div>
                            <h1 class=" text-2xl">DengDeng </h1>
                            <p class=" text-base text-slate-700">Hi, I’m Dengdeng. I majored in teaching Chinese as a second language in university and got an international Chinese teacher certificate. After graduation, I worked as a Chinese teacher in a college in Thailand. I have been teaching Chinese for 6 years. In Everyday Chinese team, I'm mainly responsible for course design and review. It's a great pleasure to meet you here and help you learn Chinese language!</p>
                        </div>
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class=" w-full bg-gradient-to-r from-[#fce3f3] via-[#fef8fc] to-[#FFF]   h-full flex items-center px-4 gap-4">
                        <img src="{{ asset('images/th.jpg') }}" alt="" srcset="" class=" w-40 h-40 rounded-full ">
                        <div>
                            <h1 class=" text-2xl">Joyce</h1>
                            <p class=" text-base text-slate-700">Hello! I’m Joyce. I’ve been teaching Chinese for 9 years. My students are from different parts of the world with diverse backgrounds and ages. Among them, the youngest is 6 and the oldest are in their seventies. My strength is to teach from the learner’s perspective and cater to their needs with the easiest to understand language. My goal is to make your every class with me a fruitful one!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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