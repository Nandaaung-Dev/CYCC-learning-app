<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    @foreach ($courses as $course)
        <a href="{{ route('course.show', ['id' => $course->id]) }}" class="border p-[16px] rounded-xl cursor-pointer">
            <div class="">
                <img src="{{ asset('images/cover_photo.png') }}" alt="" srcset="" class=" w-full rounded-xl">
            </div>
            <div class=" w-full">
                <h3 class="pt-2 font-medium">{{ $course->title }}</h3>
                <p class=" text-sm text-[#808081]"> {{ $course->description }}
                </p>
                <div class="pt-4 flex justify-between flex-wrap">
                    <div class=" flex items-center gap-3">
                        <span>{{ $course->rating }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none">
                            <path
                                d="M8 13.3995L11.8799 15.8549C12.5904 16.3049 13.4599 15.6397 13.2729 14.7984L12.2445 10.1811L15.6756 7.07027C16.302 6.50289 15.9654 5.42682 15.1427 5.35834L10.6271 4.95726L8.86012 0.594284C8.54225 -0.198095 7.45775 -0.198095 7.13988 0.594284L5.3729 4.94748L0.857274 5.34856C0.034552 5.41703 -0.302016 6.4931 0.324375 7.06049L3.7555 10.1713L2.7271 14.7886C2.54012 15.6299 3.40958 16.2951 4.12012 15.8451L8 13.3995Z"
                                fill="#FB56C2" />
                        </svg>
                        <span class=" text-[#808081]">({{ $course->reviews }} reviews) </span>
                    </div>
                    <div class=" text-[#E3E3E3]">|</div>
                    <div class=" flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M11.992 4C7.576 4 4 7.584 4 12C4 16.416 7.576 20 11.992 20C16.416 20 20 16.416 20 12C20 7.584 16.416 4 11.992 4ZM12 18.4C8.464 18.4 5.6 15.536 5.6 12C5.6 8.464 8.464 5.6 12 5.6C15.536 5.6 18.4 8.464 18.4 12C18.4 15.536 15.536 18.4 12 18.4ZM11.824 8H11.776C11.456 8 11.2 8.256 11.2 8.576V12.352C11.2 12.632 11.344 12.896 11.592 13.04L14.912 15.032C15.184 15.192 15.536 15.112 15.696 14.84C15.864 14.568 15.776 14.208 15.496 14.048L12.4 12.208V8.576C12.4 8.256 12.144 8 11.824 8Z"
                                fill="#FB56C2" />
                        </svg>
                        <span class=" text-[#808081]">{{ $course->duration }} hr</span>
                    </div>

                </div>
                <div class="pt-4 flex gap-2 ">
                    <span
                        class="rounded-full text-[12px] px-[12px] py-[8px] text-[#FB56C2] bg-[#FDE2F4]">Beginner</span>
                    <span class="rounded-full text-[12px] px-[12px] py-[8px] text-[#FB56C2] bg-[#FDE2F4]">Mandrin</span>
                </div>
            </div>
        </a>
    @endforeach
</div>
