<div class="py-[80px]">
@if( request()->path() == '/' )

    <div class="flex justify-around items-center">
        <a href="/">
            <img src="{{ asset('images/footer-2.png') }}" alt="" srcset="" class=" w-[210px]">
        </a>

        <div class=" flex gap-12 flex-wrap justify-center text-md">
            <a href="#home" class=" hover:text-[#FB56C2]">Home</a>
            <a href="#courses" class=" hover:text-[#FB56C2]">Courses</a>
            <a href="#blogs" class=" hover:text-[#FB56C2]">Blogs</a>
            <a href="#about" class=" hover:text-[#FB56C2]">About Us</a>
            <a href="#contact_us" class=" hover:text-[#FB56C2]">Contact Us</a>
        </div>

        <div class=" flex justify-center items-center gap-6">
            <img src="{{ asset('images/facebook.png') }}" alt="" srcset="" class=" w-10 h-10">
            <img src="{{ asset('images/viber.png') }}" alt="" srcset="" class=" w-10 h-10">
            <img src="{{ asset('images/telegram.png') }}" alt="" srcset="" class=" w-10 h-10">
        </div>
    </div>
    <div class="mt-[80px] relative">
        <div class="my-[20px]" style="border-bottom: 2px solid var(--Secondary, #FB56C2);"></div>
        <p class=" absolute -top-3 right-[40%] w-[300px] text-center bg-white ">Copyright © 2023 cycc.com</p>
    </div>
    @endif


</div>