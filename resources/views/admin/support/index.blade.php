@extends('layouts.admin')

@section('content')
<div class="bg-gray-100 min-h-screen">
    <div class="max-w-5xl mx-auto py-12">
        <h1 class="text-4xl font-bold mb-8 text-center text-gray-800">Support Tickets</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($supports as $support)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="px-6 py-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $support->get_name() }}</h2>
                    <p class="text-gray-600 mb-2">{{ $support->get_email() }}</p>
                    <p class="text-gray-700">{{ $support->get_message() }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
