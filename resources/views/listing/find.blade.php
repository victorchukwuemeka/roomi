@extends('layouts.app')
@section('content')

<main class="container mx-auto mt-2 p-4 bg-white rounded-lg shadow-lg">

    <h1 class="text-3xl text-gray-800 font-semibold mb-6">Find Roommates</h1>

    <!-- Search and Filter Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        <!-- Search Bar -->
        <div class="col-span-2 space-y-4">
            <input type="text" id="search" placeholder="Search by location, budget, etc."
             class="w-full p-2 border rounded">
        </div>

        <!-- Filter Section -->
        <div class="space-y-4">
            <h2 class="text-lg text-gray-600 font-semibold">Filter By:</h2>
            <div class="space-y-2">
                <label for="location" class="text-sm text-gray-600">Location</label>
                <select id="location" class="w-full p-2 border rounded">
                    <option value="">Any</option>
                    <option value="city1">City 1</option>
                    <option value="city2">City 2</option>
                </select>
            </div>
            <div class="space-y-2">
                <label for="budget" class="text-sm text-gray-600">Budget</label>
                <select id="budget" class="w-full p-2 border rounded">
                    <option value="">Any</option>
                    <option value="budget1">$500 - $1000</option>
                    <option value="budget2">$1000 - $1500</option>
                </select>
            </div>
            <div>
                <button class="bg-blue-500 text-white rounded-full py-2 px-6">Apply Filters</button>
            </div>
        </div>
    </div>

    <!-- Roommate Listings -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
        <!-- Sample roommate listing cards go here -->
        <!-- You can generate these dynamically from your database -->
    </div>
</main>
<div class="container mx-auto p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($viewData['listings'] as $listing)
            <div class="bg-white p-4 shadow-lg rounded-lg">
              <video width="320" height="240" class="w-full h-48 object-cover rounded-t-lg" controls>
                <source src="{{ asset('storage/' .$listing->get_video()) }}" type="video/mp4">
              </video>
                <div class="p-4">
                    <h2 class="text-xl font-semibold">
                      {{ $listing->get_title() }}
                    </h2>
                    <p class="text-gray-600 text-sm mt-2">
                      {{ $listing->get_description() }}
                    </p>
                    <div class="mt-2 flex justify-between items-center">
                        <p class="text-gray-700 font-semibold text-lg">
                          {{ $listing->get_rent() }}
                        </p>
                        <p class="text-gray-700 font-semibold text-lg">
                          {{ $listing->get_location() }}
                        </p>
                        <div class="flex items-center">
                          <a href="{{ url('/profile/'.$listing->get_user_id())}}">
                            @if($listing->user->profile_image)
                            <img src="{{ asset('/storage/'.$listing->user->profile_image) }}" alt="User's Profile Picture"
                            class="w-8 h-8 rounded-full">
                            @else
                            <img src="{{ asset('pig.jpg') }}" alt="User's Profile Picture"
                            class="w-8 h-8 rounded-full">
                            @endif
                          </a>
                            <p class="text-sm text-gray-700 ml-2">
                              {{ $listing->user->name }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection
