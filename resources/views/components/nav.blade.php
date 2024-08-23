    @vite('resources/css/app.css')
    <!-- {{ request()->path() }} -->

    <div id="nav"
        class="font-dm-sans text-body-2 text-text-color-01 flex w-full px-4 md:px-10 py-4 mx-auto justify-between items-center">
        <a href="/" class="flex-shrink-0">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-[150px] lg:w-[210px] h-[50px] lg:h-[70px]">
        </a>
        @if( request()->path() == '/' )
        <div class="w-1/2 text-lg  text-center md:text-left mt-4 md:mt-0 hidden md:block">
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
        @endif
        <div class="flex justify-end lg:gap-5 gap-0 w-[300px] h-[50px] items-center md:mt-0">
            {{-- <div class=" hidden lg:block p-3 rounded-full hover:border border-[#FB56C2]">
                <img src="{{ asset('images/search.svg') }}" alt="Search" srcset="">
        </div> --}}
        @guest
        <!-- Sign-Up Button -->
        <button data-modal-target="signup-modal" data-modal-toggle="signup-modal"
            class="px-6 md:px-[24px] py-4 md:py-[16px] rounded-full border border-[#FB56C2]">
            Register
        </button>

        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="bg-[#FB56C2] px-6 md:px-[24px] py-4 md:py-[16px] rounded-full text-white">
            Log in
        </button>
        @endguest
        @auth
        @if (auth()->user()->name == 'Admin')
        <a href="/admin"
            class=" w-10 h-10 rounded-full bg-[#FB56C2] hover:bg-[#fc6dca] flex items-center justify-center text-lg text-white">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</a>
        @else
        <div
            class=" w-10 h-10 rounded-full bg-[#FB56C2] hover:bg-[#fc6dca] flex items-center justify-center text-lg text-white">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>
        @endif
        <div>
            <form action="{{ route('logout') }}" method="POST" class="mb-0">
                @csrf
                <button type="submit"
                    class="bg-[#FB56C2] px-6 md:px-[24px] py-4 md:py-[16px] rounded-full text-white">
                    Logout
                </button>
            </form>
        </div>

        @endauth

    </div>
    </div>

    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow hello bg-[#FB56C2]">
                <!-- Modal header -->
                <div class="flex justify-end mb-16 me-1">
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-[#FB56C2] hover:text-white rounded-full border border-[#FB56C2] text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="flex flex-col items-center pt-4 ">
                    <img src="{{ asset('images/footer-2.png') }}" alt="" srcset="" class=" w-[212px]">
                    <h1 class=" py-[10px] font-bold text-2xl">Welcome to <span class=" text-[#FB56C2] ">CYCC</span></h1>

                </div>
                <!-- Modal body -->
                <div class="p-8 ">
                    <form class="flex flex-col gap-9" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <input type="email" name="email" id="email1"
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

    <!-- Sign-Up Modal -->
    <div id="signup-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow signup bg-[#FB56C2]">
                <!-- Modal header -->
                <div class="flex justify-end me-1">
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-[#FB56C2] hover:text-white rounded-full border border-[#FB56C2] text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="signup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="flex flex-col items-center pt-4">
                    <img src="{{ asset('images/footer-2.png') }}" alt="" srcset="" class=" w-[212px]">
                    <h1 class="py-[10px] font-bold text-2xl">Register To <span class=" text-[#FB56C2] ">CYCC</span></h1>
                </div>
                <!-- Modal body -->
                <div class="p-8">
                    <form class="flex flex-col gap-9" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-[#FB56C2] focus:border-[#FB56C2] block w-full p-2.5"
                                placeholder="Your Name" required />
                        </div>
                        <div>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-[#FB56C2] focus:border-[#FB56C2] block w-full p-2.5"
                                placeholder="Your Email" required />
                        </div>
                        <div>
                            <input type="password" name="password" id="password1"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-[#FB56C2] focus:border-[#FB56C2] block w-full p-2.5"
                                placeholder="Your Password" required />
                        </div>
                        <button type="submit"
                            class="w-full text-[#FB56C2] border border-[#FB56C2] bg-white hover:text-white hover:bg-[#FB56C2] focus:ring-4 focus:outline-none focus:ring-[#FB56C2] font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Sign Up
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <style>
        .hello {
            background-image: url(images/login-1.png) !important;
            background-size: 650px 700px;
            background-repeat: no-repeat;
            background-position: center;
            object-fit: cover;
        }
        .signup {
        background-image: url(images/login-1.png) !important;
        background-size: 560px 700px;
        background-repeat: no-repeat;
        background-position: center;
        object-fit: cover;
    }
    </style>