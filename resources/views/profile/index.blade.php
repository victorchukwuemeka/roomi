@extends('layouts.app')
@section('content')
    <div class="bg-gray-200 m-0  min-h-screen flex items-center justify-center">
        <div class="bg-white p-6 m-0 rounded-lg shadow-md w-full md:max-w-md">
          <div class="text-center">
           <img src="{{ asset('/storage/'.$viewData['user_profile_image']) }}" alt="User's Profile Picture"
            class="w-24 h-24 rounded-full mx-auto">
           <h1 class="text-2xl font-semibold mt-2">{{ $viewData['user']->name }}</h1>
           <p class="text-gray-600">{{ $viewData['user']->occupation }}</p>
            {{ $viewData['id'] }}
            <a href="{{ url('/chat/'.$viewData['id']) }}">
              <!-- Chat SVG -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.485 2.121a9 9 0 1 1-12.728 12.728 9 9 0 0 1 12.728-12.728zM8 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM8 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM12 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM16 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM16 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
              </svg>
            </a>

          </div>
            <div class="mt-4">
                <h2 class="text-xl font-semibold">About Me</h2>
                <p class="text-gray-700">{{ $viewData['user']->about_me }}</p>
            </div>
            <div class="mt-4">
                <h2 class="text-xl font-semibold">Additional Information</h2>
                <div class="mt-2">
                    <div class="flex">
                        <div class="w-1/3">
                            <p class="font-semibold">Religion:</p>
                        </div>
                        <div class="w-2/3">
                            <p>{{ $viewData['user']->religion }}</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-1/3">
                            <p class="font-semibold">Location:</p>
                        </div>
                        <div class="w-2/3">
                            <p>{{ $viewData['user']->location }}</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-1/3">
                            <p class="font-semibold">Gender:</p>
                        </div>
                        <div class="w-2/3">
                            <p>{{ $viewData['user']->gender }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h2 class="text-xl font-semibold">User Posts</h2>
                <div class="mt-4">
                    @foreach($viewData['listings'] as $listing )
                     @if($listing->get_user_id() == $viewData['id'])
                     <div class="bg-gray-50 p-4 rounded m-0 mb-4 shadow-lg rounded-lg">
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
                                     <img src="{{ asset('/storage/'.$viewData['user_profile_image'] ) }}" alt="User's Profile Picture" class="w-8 h-8 rounded-full">
                                   </a>
                                    <p class="text-sm text-gray-700 ml-2">
                                       {{ $listing->user->name }}
                                    </p>

                                 </div>
                             </div>
                         </div>
                     </div>
                     @endif
                    @endforeach

                </div>
            </div>

            @if($viewData['user_id_in_session'] == $viewData['id'])
            <div class="mt-4 text-center">
              <a href="/profile_edit">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </button>
              </a>
            </div>
            @endif

        </div>
    </div>
@endsection
