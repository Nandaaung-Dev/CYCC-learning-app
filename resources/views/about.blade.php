@extends('layouts.layout')

@section('content')

<x-about />
<div class="w-[90%] mx-auto px-[5%] h-auto my-4">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden rounded-xl h-[260px]">
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class=" w-full bg-gradient-to-r from-[#fce3f3] via-[#fef8fc] to-[#FFF]   h-full flex items-center px-4 gap-4">
                    <div class=" w-1/2 bg-slate-50 flex justify-center p-1 rounded-full">

                        <img src="{{ asset('images/image-1.png') }}" alt="" srcset="" class=" rounded-full object-cover">
                    </div>

                    <div>
                        <h1 class=" text-2xl">Cheng YingHui </h1>
                        <p class=" text-sm text-slate-700">Hello, I'm Cheng YingHui! I have been teaching Chinese to learners for three years now, and I am passionate about helping students of all ages and skill levels connect with the language. My teaching approach focuses on making lessons engaging, clear, and enjoyable, as I understand the challenges that come with learning a new language. I aim to enhance my students' speaking skills while also sharing the rich traditions and culture of China. If you're looking to improve your Mandarin and gain a deeper appreciation for Chinese culture, I would love to help you on your learning journey!</p>
                    </div>
                </div>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class=" w-full bg-gradient-to-r from-[#fce3f3] via-[#fef8fc] to-[#FFF]   h-full flex items-center px-4 gap-4">
                    <div class=" w-1/2 bg-slate-50 flex justify-center p-1 rounded-full">

                        <img src="{{ asset('images/Img-1.png') }}" alt="" srcset="" class="  rounded-full object-cover ">
                    </div>
                    <div>
                        <h1 class=" text-2xl">Yang Yongxiang</h1>
                        <p class=" text-sm text-slate-700">Hello! I'm Yang Yongxiang, a Chinese teacher dedicated to helping learners connect with the language. Although I no longer teach full-time, I still assist students in their Chinese learning journey by providing lessons and checking their homework. My goal is to make the learning process enjoyable and effective, ensuring that each student feels supported as they develop their skills in Chinese. Whether you're starting from scratch or looking to improve your proficiency, I'm here to help you every step of the way!
                        </p>
                    </div>
                </div>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class=" w-full bg-gradient-to-r from-[#fce3f3] via-[#fef8fc] to-[#FFF]   h-full flex items-center px-4 gap-4">
                    <div class=" w-1/2 bg-slate-50 flex justify-center p-1 rounded-full">

                        <img src="{{ asset('images/image-1.png') }}" alt="" srcset="" class=" rounded-full object-cover">
                    </div>

                    <div>
                        <h1 class=" text-2xl">Cheng YingHui </h1>
                        <p class=" text-sm text-slate-700">Hello, I'm Cheng YingHui! I have been teaching Chinese to learners for three years now, and I am passionate about helping students of all ages and skill levels connect with the language. My teaching approach focuses on making lessons engaging, clear, and enjoyable, as I understand the challenges that come with learning a new language. I aim to enhance my students' speaking skills while also sharing the rich traditions and culture of China. If you're looking to improve your Mandarin and gain a deeper appreciation for Chinese culture, I would love to help you on your learning journey!</p>
                    </div>
                </div>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class=" w-full bg-gradient-to-r from-[#fce3f3] via-[#fef8fc] to-[#FFF]   h-full flex items-center px-4 gap-4">
                    <div class=" w-1/2 bg-slate-50 flex justify-center p-1 rounded-full">

                        <img src="{{ asset('images/Img-1.png') }}" alt="" srcset="" class="  rounded-full object-cover ">
                    </div>
                    <div>
                        <h1 class=" text-2xl">Yang Yongxiang</h1>
                        <p class=" text-sm text-slate-700">Hello! I'm Yang Yongxiang, a Chinese teacher dedicated to helping learners connect with the language. Although I no longer teach full-time, I still assist students in their Chinese learning journey by providing lessons and checking their homework. My goal is to make the learning process enjoyable and effective, ensuring that each student feels supported as they develop their skills in Chinese. Whether you're starting from scratch or looking to improve your proficiency, I'm here to help you every step of the way!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="my-[20px]" style="border-bottom: 4px solid var(--Secondary, #FAF9FA);"></div>
<x-contact />
@endsection