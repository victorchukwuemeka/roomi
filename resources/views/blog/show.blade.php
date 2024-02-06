@extends('layouts.app')
@section('content')
<section class="bg-cover bg-center h-96 flex items-center"
style="background-image: url('{{ asset('room.jpg')}}');">
   <div class="text-white text-center mx-auto">
       <h2 class="text-4xl font-bold mb-4">{{ $blog->get_title() }}</h2>
       <a href="{{ url('find') }}"
        class="mt-4 inline-block px-6 py-3 bg-yellow-500 text-blue-900 font-semibold rounded-full">
        Explore Rooms
      </a>
   </div>
</section>

<div class="container md:container mx-auto  p-8 px-8 md:px-8">

<div class="flex">
  <div class="flex-1">
    <a href="https://twitter.com/NgRuumi29682" class="text-gray-400 hover:text-white transition duration-300">
        <i class="fab fa-x"></i>
    </a>

    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
        <i class="fab fa-facebook"></i>
    </a>
    <a href="https://wa.me/message/EEWQMBWPRXLTE1" class="text-gray-400  hover:text-white transition duration-300">
        <i class="fab fa-whatsapp"></i>
    </a>
  </div>
   <div class="font-serif break-all w-4/4">
      <div class="box-content text-left leading-relaxed  whitespace-normal break-normal
      break-words md:break-words
      p-8 h-100 w-70 p-8 px-2 md:px-32 border-1 text-2xl sm:text-4xl text-gray-700">
          {!! $blog->get_body() !!}
      </div>
    </div>
  <div class="flex-1">
    {{ __('recent post')}}
  </div>
</div>

</div>


@endsection
