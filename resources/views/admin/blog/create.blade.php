<!-- resources/views/admin/blog/create.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">Create Blog Post</h1>

        <form action="{{ route('admin.blog.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 border rounded-md w-full">
            </div>

            <div class="mb-4">
                <label for="body" class="block text-sm font-medium text-gray-600">Content</label>

                <textarea name="body" id="body" rows="6" class="ckeditor mt-1 p-2 border rounded-md w-full">
                </textarea>
            </div>

            <!-- Add more fields as needed -->

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create Post</button>
            </div>
        </form>
    </div>

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@endsection
