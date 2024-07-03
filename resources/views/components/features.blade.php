<div id="courses" class="container mx-auto pt-[80px] h-auto px-4">
    <div class=" flex justify-between items-center mb-[40px]">
        <div class=" text-lg sm:text-3xl  font-bold px-[20px]"
            style="border-left: 8px solid var(--Primary-color, #FB56C2);">
            Featured
            Courses
        </div>
        <a href="/all-courses" class=" text-lg text-[#808081] flex items-center">See all <span><svg
                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path
                        d="M12.3866 21.1733L17.5599 16L12.3866 10.8266C11.8666 10.3066 11.8666 9.46664 12.3866 8.94664C12.9066 8.42664 13.7466 8.42664 14.2666 8.94664L20.3866 15.0666C20.9066 15.5866 20.9066 16.4266 20.3866 16.9466L14.2666 23.0666C13.7466 23.5866 12.9066 23.5866 12.3866 23.0666C11.8799 22.5466 11.8666 21.6933 12.3866 21.1733Z"
                        fill="#808081" />
                </svg></span> </a>
    </div>

    <x-course-card :courses="$courses"></x-course-card>


</div>
</div>
