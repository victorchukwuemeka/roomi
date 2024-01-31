@extends('layouts.app')
@section('content')

<div class="container md:container mx-auto  p-8 px-8 md:px-8">

    <h1 class="text-3xl text-center sm:text-4xl font-extrabold mb-4 text-gray-900">
        {{ $blog->get_title() }}
    </h1>

      <div class="flex">
        <div class="flex-grow mb-6 md:w-full xl:w-full lg:w-full">
            <img src="{{ asset('pig.jpg') }}" alt="Article Image"
            class="w-full md:w-full xl:w-full lg:w-full max-w-lg mx-auto rounded-lg shadow-lg">
        </div>
      </div>

   <div class="w-4/4">
      <div class="box-content text-left leading-relaxed  whitespace-normal break-normal
      break-words md:break-words
      p-8 h-100 w-70 p-8 px-2 md:px-32 border-1 text-gray-700">
          {!! $blog->get_body() !!}
      </div>
    </div>

</div>


@endsection
