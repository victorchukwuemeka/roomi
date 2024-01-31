@extends('layouts.app')
@section('content')

<section class="py-10 px-5  sm:py-10">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Article 1 -->
        @foreach($viewData['blogs'] as $article)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('pig.jpg') }}" alt="Article 1" class="w-full h-48 object-cover object-center">
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
                  <h2>{{ $article->get_id()}}</h2>
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
