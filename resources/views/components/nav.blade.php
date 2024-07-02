<div id="nav"
    class="font-dm-sans text-body-2 text-text-color-01 flex w-full px-4 md:px-10 py-4 mx-auto justify-between items-center">
    <a href="/" class="flex-shrink-0">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-[150px] lg:w-[210px] h-[50px] lg:h-[70px]">
    </a>
    <div class="w-1/2 text-md  text-center md:text-left mt-4 md:mt-0 hidden md:block">
        <ul class="flex justify-evenly gap-6 md:gap-0">
            <a href="/"
                class=" hover:border rounded-full hover:text-[#FB56C2] active:text-[#FB56C2] active:font-bold px-4 py-2">Home</a>
            <a href="#courses"
                class=" hover:border rounded-full hover:text-[#FB56C2] active:text-[#FB56C2] active:font-bold px-4 py-2">Courses</a>
            <a href="#blogs"
                class=" hover:border rounded-full hover:text-[#FB56C2] active:text-[#FB56C2] active:font-bold px-4 py-2">Blogs</a>
            <a href="#about"
                class=" hover:border rounded-full hover:text-[#FB56C2] active:text-[#FB56C2] active:font-bold px-4 py-2">About
                Us</a>
            <a href="#contact_us"
                class=" hover:border rounded-full hover:text-[#FB56C2] active:text-[#FB56C2] active:font-bold px-4 py-2">Contact
                Us</a>
        </ul>
    </div>
    <div class="flex justify-end lg:gap-5 gap-0 w-[300px] h-[50px] items-center md:mt-0">
        <div class=" hidden lg:block p-3 rounded-full hover:border border-[#FB56C2]">
            <img src="{{ asset('images/search.svg') }}" alt="Search" srcset="">
        </div>
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="bg-[#FB56C2] px-6 md:px-[24px] py-4 md:py-[16px] rounded-full text-white">
            Log in
        </button>
    </div>
</div>
