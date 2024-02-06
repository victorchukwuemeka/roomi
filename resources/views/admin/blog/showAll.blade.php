@extends('layouts.admin')

@section('content')
<div class="p-4">
    @foreach($viewData['blogs'] as $blog)
        <div class="mb-4 border p-4 rounded-lg">
            <a href="{{ url('/admin/blog/show/' . $blog->get_id()) }}" class="text-xl font-bold text-blue-500 hover:underline">
                {{ $blog->get_title() }}
            </a>
            <p class="text-gray-600">{{ $blog->get_body() }}</p>
        </div>
    @endforeach
</div>
@endsection



