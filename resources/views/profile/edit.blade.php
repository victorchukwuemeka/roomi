@extends('layouts.app')
@section('content')
<body class="bg-gray-200">
    <div class="container mx-auto p-4">
        <div class="bg-white p-6 rounded-lg shadow-md md:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto">
            <h1 class="text-2xl font-semibold mb-4">Edit Profile</h1>
            <form action="{{ route('profile.update', $user->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
                <div class="mb-4">
                    <label for="image" class="block text-gray-600 font-semibold">Profile Image:</label>
                    <input type="file" id="image" name="profile_image" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 font-semibold">Name:</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="occupation" class="block text-gray-600 font-semibold">Occupation:</label>
                    <input type="text" id="occupation" name="occupation" value="{{ $user->occupation }}"class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="about" class="block text-gray-600 font-semibold">About Me:</label>
                    <textarea id="about" name="about_me" rows="4"  class="w-full p-2 border border-gray-300 rounded" required>
                      {{ $user->about_me }}
                    </textarea>
                </div>
                <div class="mb-4">
                    <label for="religion" class="block text-gray-600 font-semibold">Religion:</label>
                    <input type="text" id="religion" name="religion" value="{{ $user->religion }}" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="location" class="block text-gray-600 font-semibold">Location:</label>
                    <input type="text" id="location" name="location" value="{{ $user->location }}" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="gender" class="block text-gray-600 font-semibold">Gender:</label>
                    <input type="text" id="gender" name="gender" value="{{ $user->gender }}" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div class="mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
