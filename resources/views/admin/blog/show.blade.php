@extends('layouts.admin')
@section('content')

<div class="flex items-center justify-center space-x-4 mt-4">
      <a href="{{ url('/admin/blog/editForm/'. $viewData['blog']->get_id()) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg shadow-md">
        Edit
      </a>
      <form method="POST" action="{{ route('admin.blog.destroy', $viewData['blog']->get_id()) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg shadow-md">
          Delete
        </button>
      </form>
    </div>
</div>


<div class="container md:container mx-auto  p-8 px-8 md:px-8">

    <h1 class="text-3xl text-center sm:text-4xl font-extrabold mb-4 text-gray-900">
        {{ $viewData['blog']->get_title() }}
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
          {!! $viewData['blog']->get_body() !!}
      </div>
    </div>

</div>


@endsection
