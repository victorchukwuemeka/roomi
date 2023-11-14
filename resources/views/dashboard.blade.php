@extends('layouts.app')
@section('content')



<!-- Hero Section -->
<section class="bg-white py-12">
    <div class="container mx-auto text-center">
        <img src="{{ asset('room.jpg') }}" alt="Roommates" class="w-64 h-64 mx-auto mb-6 rounded-full shadow-lg">
        <h1 class="text-4xl text-gray-800 font-semibold">Find Your Perfect Roommate</h1>
        <p class="text-xl text-gray-600 mt-4">Your ideal co-living experience starts here.
          Join thousands of others who have found compatible roommates on our platform.</p>
        <div class="flex items-center justify-center">
          <form class="" action="{{ route('search') }}" method="get">
            <input type="search" name="query" class="w-full sm:w-64 p-2 rounded-l-full
             focus:outline-none mb-2 sm:mb-0" placeholder="Enter Your RoomType Or Location">
             <button type="submit" class="bg-blue-500 text-white rounded-r-full px-4 py-2 focus:outline-none">
               Search Now
             </button>
          </form>
        </div>
    </div>
</section>


<!-- Features and Benefits Section -->
<section class="bg-gray-200 py-2 my-8 mx-2 sm:py-12">
    <div class="container mx-auto flex flex-col items-center">
        <div class="w-full sm:w-2/3 p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-xl sm:text-2xl text-gray-800 font-semibold text-center">
                Key Features
            </h2>
            <ul class="mt-4 space-y-2">
                <li class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="text-sm sm:text-base">
                        Verified User Profiles
                    </span>
                </li>
                <li class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="text-sm sm:text-base">
                        Personalized Matchmaking
                    </span>
                </li>
                <li class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="text-sm sm:text-base">
                        Safe and Secure Environment
                    </span>
                </li>
            </ul>
        </div>
    </div>
</section>


@endsection
