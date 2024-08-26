<div id="blogs" class="container mx-auto h-auto px-4 pt-4">
    <div class=" flex justify-between items-center mb-[40px]">
        <div class=" text-lg sm:text-3xl  font-bold px-[20px]"
            style="border-left: 8px solid var(--Primary-color, #FB56C2);">
            <!-- Blogs & Activities -->
        </div>
        @if (auth()->user()?->name == 'Admin')

        <a href="/blog/create" class=" text-lg text-[#808081] flex items-center"> Create Blog <span><svg xmlns="http://www.w3.org/2000/svg"
                    width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path
                        d="M12.3866 21.1733L17.5599 16L12.3866 10.8266C11.8666 10.3066 11.8666 9.46664 12.3866 8.94664C12.9066 8.42664 13.7466 8.42664 14.2666 8.94664L20.3866 15.0666C20.9066 15.5866 20.9066 16.4266 20.3866 16.9466L14.2666 23.0666C13.7466 23.5866 12.9066 23.5866 12.3866 23.0666C11.8799 22.5466 11.8666 21.6933 12.3866 21.1733Z"
                        fill="#808081" />
                </svg></span> </a>
        @endif
    </div>


    @if (!$blogs->count())
    <div class="flex justify-center">
        <img src="{{ asset('images/no_data.jpg') }}" alt="No Data" class="w-[40%]">
    </div>
    @else
    {{-- Card --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($blogs as $blog)
        <div class="border p-[16px] rounded-xl h-[400px] ">
            <a href="{{ route('blog.show', $blog->id)}}" class="cursor-pointer">
                <img src="{{ asset('storage/blog/image/' . $blog->image) }}" alt="Blog Image" class="w-[310px] h-[203px] rounded-xl">
            </a>
            <div class="w-full">
                <h3 class="pt-2 font-bold">
                    <a href="{{ route('blog.show', $blog->id)}}">{{ $blog->title }}</a>
                </h3>
                <p class="text-sm text-[#808081]">
                    <a href="{{ route('blog.show', $blog->id)}}">{!! substr($blog->description, 0, 100) !!}</a>
                </p>
                @if (auth()->user()?->name == 'Admin')
                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog post?');" class="float-right">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600">
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </form>
                @endif
            </div>


        </div>

        @endforeach
    </div>
    @endif


</div>