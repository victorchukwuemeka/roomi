@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-8 p-8 bg-white rounded shadow">
        <h1 class="text-3xl font-bold mb-6">{{ __('Creating The Ruumi Affiliate Account') }}</h1>

        <p>
            Before you proceed to create your affiliate account, please familiarize yourself with the payment conditions:
        </p>

        <div class="mt-4">
            <p class="font-bold">Payment Conditions:</p>
            <ol class="list-decimal ml-6">
                <li>
                    <strong>Room Introduction Video:</strong> The user you invite must share a video showcasing their room as they seek a roommate. This helps create a genuine connection within our community.
                </li>
                <li>
                    <strong>Location Verification:</strong> To maintain the integrity of our platform, we perform location verification. Ensure that the provided location details are accurate.
                </li>
                <li>
                    <strong>Terms Subject to Change:</strong> Our terms and conditions are subject to periodic updates. Stay informed about any changes to the affiliate program by reviewing our latest terms.
                </li>
                <li>
                    <strong>Accurate Account Details:</strong> To facilitate seamless payments, ensure that your account details are accurate and up-to-date.
                </li>
            </ol>
        </div>

        <div class="mt-6">
            <h2 class="text-2xl font-bold">Ready to create your affiliate account?</h2>
            @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
              <strong class="font-bold">Error!</strong>
              <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif


            {{-- Affiliate Account Form --}}
            <form action="{{ route('store.affiliate.data') }}" method="post" class="mt-4">
                @csrf

                <div class="mb-4">
                    <label for="bank_name" class="block text-sm font-medium text-gray-700">Bank Name</label>
                    <input type="text" id="bank_name" name="bank_name" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="account_number" class="block text-sm font-medium text-gray-700">Account Number</label>
                    <input type="text" id="Acc_num" name="Acc_num" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" id="phone_num" name="phone_num" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="loaction" class="block text-sm font-medium text-gray-700">Your Location</label>
                    <input type="text" id="location" name="location" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Create Affiliate Account</button>
            </form>
        </div>
    </div>
@endsection
