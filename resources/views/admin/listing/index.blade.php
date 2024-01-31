<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">Listings Management</h1>

        @foreach($viewData['listings'] as $listing)
            <div class="bg-white p-4 mb-4 shadow-md rounded-md">
                <h2 class="text-lg font-semibold mb-2">{{ $listing->get_title() }}</h2>
                <p class="text-gray-600 mb-2">Rent: {{ $listing->get_rent() }}</p>
                <p class="text-gray-600 mb-2">Location: {{ $listing->get_location() }}</p>
                <p class="text-gray-600 mb-4">Description: {{ $listing->get_description() }}</p>

                @if ($listing->get_video())
                    <div class="mb-4">
                        <iframe
                            width="100%"
                            height="315"
                            src="{{ asset('storage/'.$listing->get_video())}}"
                            title="{{ $listing->get_title() }} Video"
                            frameborder="0"
                            allowfullscreen
                        ></iframe>
                    </div>
                @endif

                <!-- Add more details and styling as needed -->

                <form action="{{ route('admin.listing.destroy', $listing->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-800 focus:outline-none">
                        Delete Listing
                    </button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
