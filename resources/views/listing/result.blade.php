@extends('layouts.app')
@section('content')

<div class="container mx-auto p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($viewData['listings'] as $listing)
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('/storage/' . $listing->get_image()) }}" alt="Listing Image" class="w-full h-48 object-cover rounded-t-lg">
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
                            <img src="{{ asset('/storage/'.$listing->user->profile_image) }}" alt="User's Profile Picture" class="w-8 h-8 rounded-full">
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

@endsection
