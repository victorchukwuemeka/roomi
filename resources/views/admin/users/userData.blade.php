<!-- resources/views/admin/user_profile.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container mx-auto  p-8">
        <h1 class="text-2xl text-center font-semibold mb-4">User Profile</h1>

        <div class="bg-white p-6 mx-w-48 rounded-md shadow-md">
            <div class="flex items-center  mx-w-48  mb-4">
                <img src="{{ asset('/storage/'.$viewData['user_data']->get_profile_image()) }}"
                alt="Profile Image" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <h2 class="text-lg font-semibold">{{ $viewData['user_data']->name }}</h2>
                    <p class="text-gray-600">{{ $viewData['user_data']->location }}</p>
                </div>
            </div>

            <div class="mb-4">
                <h3 class="text-xl font-semibold mb-2">Occupation: {{ $viewData['user_data']->occupation }}</h3>
                <p class="text-gray-600">{{ $viewData['user_data']->about_me }}</p>
            </div>

            <div class="mb-4">
                <h3 class="text-xl font-semibold mb-2">Religion: {{ $viewData['user_data']->religion }}</h3>
                <h3 class="text-xl font-semibold mb-2">Gender: {{ $viewData['user_data']->gender }}</h3>

            </div>

            <!-- Add more sections for additional user data -->

            <!-- Example of a button to edit user profile -->
            <a href="{{ url('admin.editUserProfile', $viewData['user_data']->id) }}" class="text-blue-500 hover:underline">Edit Profile</a>
        </div>
    </div>
@endsection
