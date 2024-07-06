<div>
    <h3>Upload a video</h3>
    <hr>
    <form method="POST" action="{{ route('course.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div>
            <label>Title</label>
            <input type="text" name="title" placeholder="Enter Title" required>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Enter description" required>
        </div>
        <div>
            <label>Duration</label>
            <input type="text" name="duration" placeholder="Enter duration" required>
        </div>
        <div>
            <label>Choose Video</label>
            <input type="file" name="video" required>
        </div>
        <hr>
        <button type="submit">Submit</button>
    </form>
