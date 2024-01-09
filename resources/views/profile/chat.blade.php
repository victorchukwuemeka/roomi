<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Chat with Tailwind</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Chat Container -->
    <div class="container mx-auto p-6">
        <!-- Chat Messages -->
        <div class="border rounded-lg p-4 mb-4 bg-white">
          @foreach($viewData['messages'] as $message)
            @php
              $isSender = $message->sender_id == auth()->id();
            @endphp
            @if($isSender)

            <div class="text-right mb-2">
              <div class="flex items-center justify-end">
                <div class="ml-3 text-right flex-grow">
                  <p class="text-gray-600 font-semibold">{{ $message->sender->name}}</p>
                  <p class="bg-green-200 rounded-lg p-2 text-sm">{{ $message->message_content }}</p>
                </div>
                @if($message->sender->get_profile_image())
                <div class="flex-shrink-0">
                    <img class="h-8 w-8 rounded-full" src="{{asset('/storage/'.$message->sender->get_profile_image())}}" alt="User Avatar">
                </div>
                @else
                <div class="flex-shrink-0">
                    <img class="h-8 w-8 rounded-full" src="{{asset('pig.jpg')}}" alt="User Avatar">
                </div>
                @endif
             </div>
          </div>
          @else
          <div class="text-left mb-2">
            <div class="flex items-start">
               @if($viewData['user']->get_profile_image())
                <div class="flex-shrink-0">
                    <img class="h-8 w-8 rounded-full" src="{{ asset('/storage/'. $viewData['user']->get_profile_image()) }}" alt="User Avatar">
                </div>
               @else
               <div class="flex-shrink-0">
                   <img class="h-8 w-8 rounded-full" src="{{ asset('pig.jpg')}}" alt="User Avatar">
               </div>
               @endif
                <div class="ml-3">
                  <p class="text-xs text-gray-600 font-semibold">{{$viewData['user']->name}} </p>
                  <p class="bg-blue-200 rounded-lg p-2 text-sm">{{ $message->message_content }}</p>
                </div>
            </div>
         </div>
         @endif
         @endforeach

        </div>

        <!-- Reply Bar -->
        <form action="{{ route('messages.store') }}" method="POST">
          @csrf
          <div class="flex flex-col md:flex-row items-center bg-gray-200 p-4 rounded-lg">
              <!-- Input Field -->
              <input type="text" name="message_content" placeholder="Type your message..."
              class="flex-grow p-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
              <input type="hidden" name="receiver_id" value="{{ $viewData['user_id'] }}">
              <!-- Send Button -->
              <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                  <i class="fas fa-paper-plane"></i> Send
              </button>
          </div>
        </form>

    </div>

</body>
</html>
