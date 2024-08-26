<div id="contact_us" class="bg-gradient-to-r from-white  via-[#ffc5ec] to-[#fef2fa] ">
    <div class=" container mx-auto ">

        <div class=" flex justify-center items-start py-10 ">
            <div class="w-1/2 flex flex-col gap-4">
                <div>
                    <div class="text-lg text-[#FB56C2] sm:text-3xl font-bold px-[20px]" style="border-left: 8px solid var(--Primary-color, #FB56C2);">
                        Contact Us
                    </div>
                    <p class="text-[#FB56C2] mt-[30px]">For any further inquiries, feel free to contact us.</p>
                </div>
                <form id="contact-form" class="flex flex-col gap-4" onsubmit="return handleFormSubmit()">
                    <div class="relative min-w-[200px] h-12 w-[70%] rounded-3xl">
                        <input
                            id="name_1"
                            name="name"
                            class="peer w-full h-full bg-transparent text-[#FB56C2] font-sans font-normal outline outline-1 outline-[#FB56C2] focus:outline-0  disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-[#FB56C2] placeholder-shown:border-t-[#FB56C2] border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-[#FB56C2] focus:border-[#FB56C2]"
                            placeholder=" "
                            required />
                        <label
                            class="flex w-full h-full text-gray-400 select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-[#FB56C2] leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-[#FB56C2] transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-[#FB56C2] peer-focus:text-[#FB56C2] before:border-[#FB56C2] peer-focus:before:!border-[#FB56C2] after:border-[#FB56C2] peer-focus:after:!border-[#FB56C2]">Your name
                        </label>
                    </div>
                    <div class="relative min-w-[200px] h-12 w-[70%]">
                        <input
                            id="email_2"
                            name="email"
                            class="peer w-full h-full bg-transparent text-[#FB56C2] font-sans font-normal outline outline-1 outline-[#FB56C2] focus:outline-0  disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-[#FB56C2] placeholder-shown:border-t-[#FB56C2] border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-[#FB56C2] focus:border-[#FB56C2]"
                            placeholder=" "
                            required />
                        <label
                            class="flex w-full h-full text-gray-400 select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-[#FB56C2] leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-[#FB56C2] transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-[#FB56C2] peer-focus:text-[#FB56C2] before:border-[#FB56C2] peer-focus:before:!border-[#FB56C2] after:border-[#FB56C2] peer-focus:after:!border-[#FB56C2]">Your Email
                        </label>
                    </div>
                    <div class="relative min-w-[200px] h-32 w-[70%]">
                        <textarea
                            id="message_3"
                            name="message"
                            class="peer w-full h-full bg-transparent text-[#FB56C2] font-sans font-normal outline outline-1 outline-[#FB56C2] focus:outline-0  disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-[#FB56C2] placeholder-shown:border-t-[#FB56C2] border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-[#FB56C2] focus:border-[#FB56C2]"
                            placeholder=" "
                            required></textarea>
                        <label
                            class="flex w-full h-full text-gray-400 select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-[#FB56C2] leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-[#FB56C2] transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-[#FB56C2] peer-focus:text-[#FB56C2] before:border-[#FB56C2] peer-focus:before:!border-[#FB56C2] after:border-[#FB56C2] peer-focus:after:!border-[#FB56C2]">Your Message
                        </label>
                    </div>
                    <div>
                        <button type="submit" class="flex gap-2 items-center border hover:bg-[#FB56C2] group border-[#FB56C2] px-[45px] py-[10px] rounded-xl">
                            <span class="text-[#FB56C2] group-hover:text-white">Send</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                    fill="none">

                                    <path
                                        d="M19.1168 12.6484C19.474 12.8581 19.9336 12.7384 20.1432 12.3811C20.3528 12.0238 20.2331 11.5643 19.8758 11.3547L19.1168 12.6484ZM6.94333 4.63656L6.55626 5.27902L6.5638 5.28344L6.94333 4.63656ZM5.51034 5.59156L4.76844 5.70151C4.77578 5.75101 4.78804 5.79965 4.80507 5.84671L5.51034 5.59156ZM7.12408 12.2567C7.26499 12.6462 7.69498 12.8477 8.08449 12.7068C8.474 12.5659 8.67552 12.1359 8.53461 11.7464L7.12408 12.2567ZM19.8758 12.6484C20.2331 12.4388 20.3528 11.9793 20.1432 11.622C19.9336 11.2648 19.474 11.1451 19.1168 11.3547L19.8758 12.6484ZM6.94333 19.3666L6.56377 18.7196L6.5563 18.7241L6.94333 19.3666ZM5.51034 18.4116L4.80507 18.1564C4.78804 18.2035 4.77578 18.2521 4.76844 18.3016L5.51034 18.4116ZM8.53461 12.2567C8.67552 11.8672 8.474 11.4372 8.08449 11.2963C7.69498 11.1554 7.26499 11.3569 7.12408 11.7464L8.53461 12.2567ZM19.4963 12.7516C19.9105 12.7516 20.2463 12.4158 20.2463 12.0016C20.2463 11.5873 19.9105 11.2516 19.4963 11.2516V12.7516ZM7.82933 11.2516C7.41512 11.2516 7.07933 11.5873 7.07933 12.0016C7.07933 12.4158 7.41512 12.7516 7.82933 12.7516V11.2516ZM19.8758 11.3547L7.32287 3.98968L6.5638 5.28344L19.1168 12.6484L19.8758 11.3547ZM7.33037 3.99414C6.76611 3.65419 6.05635 3.67038 5.50819 4.0357L6.34003 5.28391C6.40509 5.24055 6.4893 5.23867 6.55626 5.27902L7.33037 3.99414ZM5.50819 4.0357C4.96001 4.40102 4.67187 5.04987 4.76844 5.70151L6.25224 5.48161C6.24078 5.40427 6.27497 5.32727 6.34003 5.28391L5.50819 4.0357ZM4.80507 5.84671L7.12408 12.2567L8.53461 11.7464L6.2156 5.33641L4.80507 5.84671ZM19.1168 11.3547L6.56377 18.7196L7.32287 20.0134L19.8758 12.6484L19.1168 11.3547ZM6.5563 18.7241C6.48933 18.7645 6.40509 18.7626 6.34003 18.7192L5.50818 19.9674C6.05635 20.3327 6.76611 20.3489 7.33037 20.009L6.5563 18.7241ZM6.34003 18.7192C6.27497 18.6759 6.24078 18.5988 6.25224 18.5215L4.76844 18.3016C4.67187 18.9532 4.96001 19.6021 5.50818 19.9674L6.34003 18.7192ZM6.2156 18.6667L8.53461 12.2567L7.12408 11.7464L4.80507 18.1564L6.2156 18.6667ZM19.4963 11.2516H7.82933V12.7516H19.4963V11.2516Z"
                                        fill="#FB56C2" class="group-hover:fill-white" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
            <div class=" w-1/2">
                <img src="{{ asset('images/contact.png') }}" alt="" srcset="" class=" w-[500px] h-[500px]">
            </div>
        </div>
    </div>
</div>

<script>
    function handleFormSubmit() {
        const name = document.getElementById('name_1').value;
        const email = document.getElementById('email_2').value;
        const message = document.getElementById('message_3').value;

        const subject = 'Contact Form Submission';
        const body = `Name: ${name}\nEmail: ${email}\nMessage: ${message}`;

        const mailtoLink = `mailto:nyeinsuhtwe27@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

        // window.location.href = mailtoLink;

        window.open(mailtoLink, '_blank');

        return false; // Prevent default form submission
    }
</script>