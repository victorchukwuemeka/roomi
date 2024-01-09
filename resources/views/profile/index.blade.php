@extends('layouts.app')
@section('content')

<div class="py-8 mt-0 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2
        sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
  @if($viewData['user_profile_image'])
  <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:shrink-0"
  src="{{ asset('/storage/'.$viewData['user_profile_image']) }}"
  alt="Woman's Face" />
  @else
  <img src="{{ asset('pig.jpg') }}" alt="User's Profile Picture"
  class="w-8 h-8 rounded-full">
  @endif
  <div class="text-center space-y-2 sm:text-left">
    <div class="space-y-0.5">
      <p class="text-lg text-black font-semibold">
        {{ $viewData['user']->name }}
      </p>
      <p class="text-slate-500 font-medium">
        {{ $viewData['user']->occupation }}
      </p>
    </div>
    <a href="{{ url('/chat/'.$viewData['id']) }}">
      <button class="px-4 py-1 text-sm text-blue-600 font-semibold rounded-full
      border border-blue-200 hover:text-white hover:bg-blue-600 hover:border-transparent
      focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">
      Message
     </button>
    </a>
  </div>
</div>

<div class="mt-4 text-center">
    <h2 class="text-xl font-semibold">About Me</h2>
    <p class="text-gray-700">{{ $viewData['user']->about_me }}</p>
</div>

<div class="box-border mx-auto bg-white max-w-sm py-8 px-8 h-50 w-50 p-4 border-4">
  <div class="table w-full">
    <div class="table-header-group">
      <div class="table-row">
         <div class="table-cell text-left ...">
           Religion
         </div>
         <div class="table-cell text-left ...">
           Location
         </div>
         <div class="table-cell text-left ...">
           Gender
         </div>
      </div>
    </div>
    <div class="table-row-group">
      <div class="table-row">
        <div class="table-cell ...">
          {{ $viewData['user']->religion }}
        </div>
        <div class="table-cell ...">
          {{ $viewData['user']->location }}
        </div>
        <div class="table-cell ...">
          {{ $viewData['user']->gender }}
        </div>
      </div>
    </div>
  </div>
</div>




<div class="">
  <h2 class="text-xl text-center font-semibold">User Posts</h2>
</div>


<div class="mt-4 bg-white mx-auto max-w-sm px-2 py-8">
    @foreach($viewData['listings'] as $listing)
        @if($listing->get_user_id() == $viewData['id'])
            <div class="bg-gray-50 p-4 rounded m-0 mb-4 shadow-lg rounded-lg">

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
                           @if($viewData['user_profile_image'])
                            <a href="{{ url('/profile/'.$listing->get_user_id()) }}">
                                <img src="{{ asset('/storage/'.$viewData['user_profile_image'] ) }}" alt="User's Profile Picture" class="w-8 h-8 rounded-full">
                            </a>
                            @else
                            <a href="{{ url('/profile/'.$listing->get_user_id()) }}">
                                <img src="{{ asset('pig.jpg') }}" alt="User's Profile Picture" class="w-8 h-8 rounded-full">
                            </a>
                            @endif
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
  <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ...">
    Edit Profile
  </button>

</a>
</div>
@endif
</div>

@endsection
