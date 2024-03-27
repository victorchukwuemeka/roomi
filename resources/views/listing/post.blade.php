@extends('layouts.app')

@section('content')
<main class="container mx-auto mt-8 p-4 bg-white rounded-lg shadow-lg lg:w-1/2">
    <h1 class="text-3xl text-gray-800 font-semibold mb-6">Post a Listing</h1>

    <!-- Listing Form -->
    <form action="{{ route('listing.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <!-- Title Input -->
        <div>
            <label for="title" class="text-sm text-gray-600">Title</label>
            <input type="text" id="title" name="title" placeholder="Enter title" class="block mt-1 w-full border rounded px-4 py-2">
            @error('title')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Location Input -->
        <div>
            <label for="location" class="text-sm text-gray-600">Location</label>
            <input type="text" id="location" name="location" placeholder="Enter location" class="block mt-1 w-full border rounded px-4 py-2">
            @error('location')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Rent Input -->
        <div>
            <label for="rent" class="text-sm text-gray-600">Monthly Rent</label>
            <input type="text" id="rent" name="rent" placeholder="Enter monthly rent" class="block mt-1 w-full border rounded px-4 py-2">
            @error('rent')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description Textarea -->
        <div>
            <label for="description" class="text-sm text-gray-600">Description</label>
            <textarea id="description" name="description" placeholder="Enter description" class="block mt-1 w-full border rounded h-32 px-4 py-2"></textarea>
            @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Video Upload -->
        <div>
            <label for="video" class="text-sm text-gray-600">Upload Your Video</label>
            <input type="file" id="video" name="video" accept="videos/*" class="block mt-1 w-full p-2 border">
            @error('video')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="bg-blue-500 text-white rounded-full py-2 px-6 hover:bg-blue-600 transition duration-300">Post Listing</button>
    </form>
</main>
@endsection
