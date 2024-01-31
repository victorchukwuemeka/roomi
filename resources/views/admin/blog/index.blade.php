@extends('layouts.admin')
@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">Blog Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Blog Stats -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h2 class="text-lg font-semibold mb-2">Blog Stats</h2>
                <!-- Display blog statistics -->
            </div>

            <!-- Latest Posts -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h2 class="text-lg font-semibold mb-2">Latest Posts</h2>
                <!-- Display a list of latest blog posts -->
            </div>

            <!-- Categories -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h2 class="text-lg font-semibold mb-2">Categories</h2>
                <!-- Display a list of blog categories -->
            </div>

            <div class="bg-white p-4 rounded-md shadow-md">
              <h2 class="text-lg font-semibold mb-2">
                Create Blog Post
              </h2>
              <a href="{{ route('admin.blog.create') }}" class="text-blue-500 hover:underline">
                Create Post
              </a>
            </div>


            <div class="bg-white p-4 rounded-md shadow-md">
                <h2 class="text-lg font-semibold mb-2">Show All Post</h2>
                <!-- Display a list of blog categories -->
                <a href="{{ route('admin.blog.showAllPost') }}" 
                class="text-blue-500 hover:underline">
                  Show the Posts
                </a>
            </div>
        </div>
    </div>
@endsection
