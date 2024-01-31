@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">Admin Dashboard</h1>

        @if (session('success'))
            <div class="bg-green-200 text-green-800 p-2 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Profile Image</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Occupation</th>
                    <th class="py-2 px-4 border-b">Location</th>
                    <th class="py-2 px-4 border-b">Gender</th>
                    <th class="py-2 px-4 border-b">Religion</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($viewData['users'] as $user)
                  @if($user->role === "client")

                    <tr>

                         <td class="py-2 px-4 border-b">
                            <a href="{{ url('/admin/dashboard/userData/'.$user->id )}}">
                             <img src="{{ asset('/storage/'.$user->get_profile_image())}}" alt="Profile Image"
                             class="w-10 h-10 rounded-full">
                            </a>
                         </td>

                        <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->occupation }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->location }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->gender }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->religion }}</td>
                        <td class="py-2 px-4 border-b">
                            <form action="{{ url('/admin/deleteUserData/.', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 focus:outline-none">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                   @endif
                @empty
                    <tr>
                        <td colspan="9" class="text-center py-4">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
