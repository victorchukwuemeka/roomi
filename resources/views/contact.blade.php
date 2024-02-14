@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-md mt-10">
    <h2 class="text-2xl font-bold mb-4">Contact Us</h2>

    <p class="mb-4">For inquiries or assistance, you can reach out to our admin:</p>

    <div class="flex items-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-500 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21v-6m0 0V3m0 6h6M12 21H3m0 0h6M12 21a9 9 0 009-9V3a9 9 0 00-9 9v9a9 9 0 009 9z"></path>
        </svg>
        <span class="text-gray-600">Email: <a href="mailto:myroomi123op@gmail.com" class="text-blue-500">
          myroomi123op@gmail.com
        </a></span>
    </div>

    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-500 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l5 5L3 16M21 6l-5 5 5 5"></path>
        </svg>
        <span class="text-gray-600">Phone: <a href="tel:+123456789" class="text-blue-500">
          +2348119411510
        </a></span>
    </div>

    <hr class="my-6 border-t border-gray-300">

    <form action="{{ route('message.support') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Your Name</label>
            <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-600">Your Email</label>
            <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-600">Your Message</label>
            <textarea id="message" name="message" class="mt-1 p-2 w-full border rounded-md" rows="4"></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Submit</button>
    </form>
</div>
@endsection
