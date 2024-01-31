@extends('layouts.admin')
@section('content')


  <div class="bg-white p-8 rounded shadow-md w-96">

      <h2 class="text-2xl font-semibold mb-6">Edit Blog Post</h2>

      <form action="{{ route('admin.blog.update', $viewData['blog']->get_id())}}" method="post">
        @csrf
        @method('PUT')
          <div class="mb-4">
              <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
              <input type="text" id="title" name="title" class="mt-1 p-2 w-full border rounded-md" value="{{ $viewData['blog']->get_title()}}">
          </div>

          <!-- Content Field -->
          <div class="mb-4">
              <label for="content" class="block text-sm font-medium text-gray-600">Content</label>
              <textarea id="body" name="body" class="ckeditor mt-1 p-2 w-full border rounded-md" rows="4">
                {{ $viewData['blog']->get_body()}}
              </textarea>
          </div>

          <!-- Author Field (Read-only) -->
          <!--<div class="mb-4">
              <label for="author" class="block text-sm font-medium text-gray-600">Author</label>
              <input type="text" id="author" name="author" class="mt-1 p-2 w-full border rounded-md" value="Admin User" readonly>
          </div>-->

          <!-- Update Button -->
          <div class="flex justify-end">
              <button type="submit"
                  class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                  Update
              </button>
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
