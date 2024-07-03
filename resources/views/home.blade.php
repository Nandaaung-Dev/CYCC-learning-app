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





    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative rounded-lg bg-[#f8d5ec] shadow bg-image">
                <!-- Modal header -->
                <div class="flex justify-end">
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="flex flex-col items-center pt-[96px]">
                    <img src="{{ asset('images/footer-2.png') }}" alt="" srcset="" class=" w-[212px]">
                    <h1 class=" py-[20px] font-bold text-2xl">Welcome to <span class=" text-[#FB56C2] ">CYCC</span></h1>

                </div>
                <!-- Modal body -->
                <div class="p-8 ">
                    <form class="flex flex-col gap-9" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-[#FB56C2] focus:border-[#FB56C2] block w-full p-2.5"
                                placeholder="Your email" required />
                        </div>
                        <div>
                            <input type="password" name="password" id="password" placeholder="Your Password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-[#FB56C2] focus:border-[#FB56C2] block w-full p-2.5"
                                required />
                        </div>

                        <button type="submit"
                            class="w-full text-[#FB56C2] border border-[#FB56C2] bg-white hover:text-white  hover:bg-[#FB56C2] focus:ring-4 focus:outline-none focus:ring-[#FB56C2] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

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
