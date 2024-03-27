@extends('layouts.app')

@section('content')

<section class="bg-cover bg-center flex items-center" style="background-image: url('{{ asset('room.jpg')}}'); height: 50vh; min-height: 400px;">
    <div class="text-white text-center mx-auto">
        <h2 class="text-4xl font-bold mb-4">{{ $blog->get_title() }}</h2>
        <a href="{{ url('find') }}" class="mt-4 inline-block px-6 py-3 bg-yellow-500 text-blue-900 font-semibold rounded-full">
            Explore Rooms
        </a>
    </div>
</section>

<div class="container mx-auto py-8 px-4 md:px-8">
    <div class="flex flex-col md:flex-row">
        <div class="mb-4 md:mb-0 md:w-1/4">
            <div class="flex justify-center md:justify-start md:block">
                <a href="https://twitter.com/NgRuumi29682" class="text-gray-400 hover:text-blue-500 transition duration-300 mx-2">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-blue-500 transition duration-300 mx-2">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="https://wa.me/message/EEWQMBWPRXLTE1" class="text-gray-400 hover:text-blue-500 transition duration-300 mx-2">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
            </div>
        </div>
        <div class="md:w-3/4">
            <div class="font-serif break-all w-full">
                <div class="box-content text-left leading-relaxed whitespace-normal break-normal break-words p-4 md:p-8 border rounded-lg shadow-md text-base md:text-lg lg:text-xl text-gray-700">
                    {!! $blog->get_body() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
