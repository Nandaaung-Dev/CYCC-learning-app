    @vite('resources/css/app.css')
    <x-nav></x-nav>
    <div class=" bg-slate-300 min-h-screen font-dm-sans">
        <div class=" container mx-auto w-[40%] p-10">
            <h3 class=" text-2xl">Create Course</h3>
            <hr>
            <form method="POST" action="{{ route('course.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class=" space-y-6 py-4">
                    <div>
                        <label class="">Title <span class=" text-red-600">*</span></label> <br>
                        <input class=" w-full p-2 rounded" type="text" name="title" placeholder="Enter Title"
                            required>
                    </div>
                    <div>
                        <label>Duration <span class=" text-red-600">*</span></label> <br>
                        <input class=" w-full p-2 rounded" type="text" name="duration" placeholder="Enter duration"
                            required>
                    </div>
                    <div>
                        <label>Description <span class=" text-red-600">*</span></label> <br>
                        <input class=" w-full p-2 rounded" type="text" name="description"
                            placeholder="Enter description" required>
                    </div>
                    <div>
                        <label>Choose Video <span class=" text-red-600">*</span></label> <br>
                        <input type="file" name="video" required>
                    </div>
                </div>
                <div class=" flex justify-start mt-2"><button type="submit"
                        class=" p-2 bg-green-300 rounded">Submit</button></div>
            </form>
            <hr>
            @if ($courses->count() > 0)

                <h3 class=" text-2xl mt-4">Course Lists</h3>

                <table class="min-w-full divide-y divide-gray-200 border">
                    <thead class="">
                        <tr>
                            <th class="p-3 text-left text-xs font-medium text-gray-500 uppercase">
                                No</th>
                            <th class="p-3 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                Title</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">
                                Action</th>

                        </tr>

                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($courses as $i => $item)
                            <tr>
                                <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800 ">
                                    {{ $i+1 }}</td>
                                <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800 ">
                                    {{ \Illuminate\Support\Str::limit($item->title, 40) }}</td>
                                <td
                                    class="p-3 whitespace-nowrap  text-sm items-center flex justify-center font-medium text-gray-800 ">

                                    <form id="delete-form-{{ $item->id }}"
                                        action="{{ route('course.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete?')"
                                            class="w-6 h-8 text-red-500">
                                            <?xml version="1.0" ?><svg class="feather feather-trash-2" fill="none"
                                                height="28" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                width="28" xmlns="http://www.w3.org/2000/svg">
                                                <polyline points="3 6 5 6 21 6" />
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                                <line x1="10" x2="10" y1="11" y2="17" />
                                                <line x1="14" x2="14" y1="11" y2="17" />
                                            </svg>

                                        </button>
                                    </form>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class=" pt-2 text-slate-500 flex justify-end"> {{ $courses->links() }}
                </div>
            @endif
        </div>

    </div>
