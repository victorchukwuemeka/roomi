@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="flex">
        <div class="w-1/4 bg-gray-200 p-4 rounded-l-lg">
            <!-- Sidebar with user list -->
            <h2 class="text-xl font-semibold mb-4">Chats</h2>
            <!-- User list (add your logic to populate users) -->
            <ul>
              <a href="{{ url('/profile/'.$viewData['user_id'])}}">
                <li class="mb-2 p-2 rounded hover:bg-gray-300 cursor-pointer">
                    <div class="flex items-center">
                        <img src="{{ asset('/storage/'.$viewData['user']->get_profile_image()) }}" alt="User Avatar" class="w-8 h-8 rounded-full">
                        <span class="ml-2"> {{ $viewData['user']->name }}</span>
                    </div>
                </li>
              </a>
                <!-- Repeat for more users -->
            </ul>
        </div>
        <div class="w-3/4 bg-white p-4 rounded-r-lg">
            <!-- Chat interface -->
            <div class="bg-gray-100 p-4 rounded-lg h-96 overflow-y-scroll">
                <!-- Chat messages -->
                @foreach($viewData['messages']  as $message)

                 @if($message->sender_id == $viewData['user_id_in_session'])
                    <div class="{{ $message->sender_id === auth()->id() ? 'text-right' : 'text-left' }} mb-2">
                        <div class="bg-blue-500 text-white p-2 rounded-lg inline-block max-w-xs">
                            <p>{{ $message->message_content }}</p>
                        </div>
                    </div>

                  @endif
                  @if($message->receiver_id  == $viewData['user_id_in_session'])
                   <div class="{{ $message->sender_id === auth()->id() ? 'text-right' : 'text-left' }} mb-2">
                       <div class="bg-blue-500 text-white p-2 rounded-lg inline-block max-w-xs">
                           <p>{{ $message->message_content }}</p>
                       </div>
                   </div>
                  @endif
                @endforeach
            </div>
            <!-- Message input form -->
            <form action="{{ route('messages.store') }}" method="POST">
                @csrf
                <div class="flex">
                    <input type="text" name="message_content" class="flex-1 p-2 border rounded-l-lg"
                     placeholder="Type your message...">
                    <input type="hidden" name="receiver_id" value="{{ $viewData['user_id'] }}">
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded-r-lg">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
