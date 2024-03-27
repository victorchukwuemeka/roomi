@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-white py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <img src="{{ asset('room.jpg') }}" alt="Roommates" class="w-40 h-40 mx-auto mb-6 rounded-full shadow-lg">
        <h1 class="text-3xl sm:text-4xl text-gray-800 font-semibold">Find Your Perfect Roommate</h1>
        <p class="text-lg sm:text-xl text-gray-600 mt-4">Your ideal co-living experience starts here. Join thousands of others who have found compatible roommates on our platform.</p>
        <p class="block text-lg sm:text-xl text-gray-900 font-semibold lg:hidden mt-4">Use The Menu Bar To Find A Room Or Post The Video Of Your Room</p>
        <div class="flex items-center justify-center mt-6">
            <form class="" action="{{ route('search') }}" method="get">
                <div class="flex">
                    <input type="search" name="query" class="w-full sm:w-64 p-2 rounded-l-lg focus:outline-none" placeholder="Enter Your RoomType Or Location">
                    <button type="submit" class="bg-blue-500 text-white rounded-r-lg px-4 py-2 focus:outline-none hover:bg-blue-600 transition duration-300">Search Now</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Features and Benefits Section -->
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full sm:w-2/3 mx-auto p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-xl sm:text-2xl text-gray-800 font-semibold text-center mb-4">Key Features</h2>
            <ul class="space-y-4">
                <li class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="text-base">Verified User Profiles</span>
                </li>
                <li class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="text-base">Personalized Matchmaking</span>
                </li>
                <li class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="text-base">Safe and Secure Environment</span>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection
