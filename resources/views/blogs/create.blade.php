@extends('layouts.layout')

@section('content')
<div class="flex justify-center h-[70vh] mt-8">
    <div class="w-[1000px] bg-slate-200 h-[500px] rounded">
        <form id="Form" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data" class="py-10 px-10 flex flex-col gap-4">
            @csrf
            <div class="grid grid-cols-12 gap-2">
                <label for="image" class="text-xl col-span-2">Image :</label>
                <input type="file" name="image" id="image" class="w-2/3 rounded col-span-10">
            </div>
            <div class="grid grid-cols-12 gap-2">
                <label for="title" class="text-xl col-span-2">Title :</label>
                <input type="text" name="title" id="title" class="w-2/3 rounded col-span-10">
            </div>
            <div class="grid grid-cols-12 mb-6">
                <label for="desc" class="text-xl col-span-2">Description :</label>
                <div class="w-2/3 rounded col-span-10">
                    <div id="editor">
                    </div>
                </div>
            </div>
            <!-- Hidden input to store the Quill editor content -->
            <input type="hidden" name="description" id="description">
            <div class="flex justify-end mt-2 px-48">
                <button type="button" id="submitBtn" class="p-2 bg-green-300 rounded">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const quill = new Quill('#editor', {
            theme: 'snow'
        });

        const submitBtn = document.getElementById('submitBtn');
        const form = document.getElementById('Form');
        const descriptionInput = document.getElementById('description');

        submitBtn.addEventListener('click', function() {
            // Update the hidden input with the current content of the Quill editor
            descriptionInput.value = quill.root.innerHTML;
            console.log('Submitted content:', descriptionInput.value);
            console.log('Form', form);

            // Manually submit the form
            form.submit();
        });
    });
</script>