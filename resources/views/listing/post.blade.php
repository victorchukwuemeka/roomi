@extends('layouts.app')
@section('content')
<main class="container mx-auto mt-8 p-4 bg-white rounded-lg shadow-lg">

    <h1 class="text-3xl text-gray-800 font-semibold mb-6">Post a Listing</h1>

    <!-- Listing Form -->
    <form action="{{ route('listing.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <!-- Title Input -->
        <div class="space-y-1">
            <label for="title" class="text-sm text-gray-600">Title</label>
            <input type="text" id="title" name="title" class="w-full p-2 border rounded">
        </div>

        <!-- Location Input -->
        <div class="space-y-1">
            <label for="location" class="text-sm text-gray-600">Location</label>
            <input type="text" id="location" name="location" class="w-full p-2 border rounded">
        </div>

        <!-- Rent Input -->
        <div class="space-y-1">
            <label for="rent" class="text-sm text-gray-600">Monthly Rent</label>
            <input type="text" id="rent" name="rent" class="w-full p-2 border rounded">
        </div>

        <!-- Description Textarea -->
        <div class="space-y-1">
            <label for="description" class="text-sm text-gray-600">Description</label>
            <textarea id="description" name="description" class="w-full p-2 border rounded h-32"></textarea>
        </div>

        <!-- Image Upload -->
        <div class="space-y-1">
            <label for="image" class="text-sm text-gray-600">Upload an Image</label>
            <input type="file" id="image" name="image" accept="image/*" class="w-full p-2 border">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="bg-blue-500 text-white rounded-full py-2 px-6">Post Listing</button>
    </form>
</main>

@endsection
