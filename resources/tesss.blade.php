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

<div class="mx-auto p-4">
        <h2 class="text-3xl font-bold text-center mb-4 md:mb-0">
          {{__('Rooms Listed')}}
        </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($viewData['listings'] as $listing)
        <div class="bg-white p-4 shadow-lg rounded-lg">
            <div class="relative overflow-hidden rounded-t-lg">
                <video width="100%" class="object-cover rounded-t-lg" controls>
                    <source src="{{ asset('storage/' .$listing->get_video()) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">{{ $listing->get_title() }}</h2>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">{{ $listing->get_description() }}</p>
                <div class="flex justify-between items-center">
                    <p class="text-gray-700 font-semibold text-lg">{{ $listing->get_rent() }}</p>
                    <p class="text-gray-700 font-semibold text-lg">{{ $listing->get_location() }}</p>
                </div>
                <div class="flex items-center mt-4">
                    <a href="{{ url('/profile/'.$listing->get_user_id()) }}" class="flex items-center">
                        @if($listing->user->profile_image)
                        <img src="{{ asset('/storage/'.$listing->user->profile_image) }}" alt="User's Profile Picture" class="w-8 h-8 rounded-full">
                        @else
                        <img src="{{ asset('pig.jpg') }}" alt="User's Profile Picture" class="w-8 h-8 rounded-full">
                        @endif
                        <p class="text-sm text-gray-700 ml-2">{{ $listing->user->name }}</p>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

    <br>

        <section class="py-10 px-5  sm:py-10">
                 <h2 class="text-3xl text-center xl:text-center font-bold mb-6">
                   {{__('Articles On Getting a Roommate')}}
                 </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach($viewData['blogs'] as $article)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('home.jpg') }}" alt="Article 1" class="w-full h-48 object-cover object-center">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">{{ $article->get_title() }}</h2>
                        <div class="truncate">
                          <p class="text-gray-600 text-sm ">
                            @php
                             $body = $article->get_body();
                             $lent = strlen($body);
                             if($lent > 200){
                               $body = substr($body, 0, 200);
                             }else{
                               $body;
                             }
                            @endphp
                            {!! $body !!}
                          </p>
                        </div>

                        <a href="{{ url('/blog/'.$article->get_id()) }}"
                          class="block mt-2 text-blue-500 hover:underline text-sm">
                          Read More
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

@endsection
