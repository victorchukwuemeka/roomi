
@extends('layouts.app')

@section('content')
<div class="container mx:auto px-4 md:container md:mx-auto">
  <div class="flex items-center pt-2 justify-center">
    <img class="rounded-full h-16 w-16 object-cover mr-4"
         src="{{ asset('/storage/'.$viewData['affiliate_user']->get_profile_image()) }}"
         alt="User Profile Image" />

    <div>
        <div class="text-lg font-semibold">{{ $viewData['affiliate_user']->name }}</div>
        <div class="text-gray-600">{{ $viewData['affiliate_user']->email }}</div>
    </div>
  </div>

  <div class="mb-6">
      <div class="text-center  p-4 rounded-md">
          <span class="block text-lg font-semibold mb-2">Your Affiliate Link:</span>

          <div class="flex items-center justify-center  rounded-md">
              <span class="text-gray-700 text-7xl mr-2">{{ $viewData['user_affiliate_code'] }}</span>
              <button onclick="copyToClipboard('{{ $viewData['user_affiliate_code'] }}')"
                      class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600
                      focus:outline-none focus:ring focus:border-blue-300">
                  Copy
              </button>
          </div>
      </div>
  </div>
  <div class="mb-6">
    <div class="text-center">
        <span class="font-semibold text-xl">Payment History</span>
    </div>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
              <th class="py-2 px-4 border-b">Date</th>
              <th class="py-2 px-4 border-b">Amount</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($viewData['payment_data'] as $payment_data)

                <tr>
                    <td class="py-2 px-4 border-b">&#8358;{{ $payment_data->get_amount() }}</td>
                    <td class="py-2 px-4 border-b">{{ $payment_data->created_at->format('Y-m-d') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center py-4">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
   </div>

   <div class="mb-6">
    <div class="text-center">
        <span class="font-semibold text-xl">{{ __('People You Referred')}}</span>
    </div>
    <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($viewData['users_you_invited'] as $invite)
            <div class="bg-white p-4 rounded-md shadow-md text-center">
                <img class="h-16 w-16 mx-auto mb-4 rounded-full object-cover"
                     src="{{asset('/storage/'.$invite->get_profile_image())}}" alt="{{ $invite->name }}">

                <span class="block font-semibold text-blue-500">{{ $invite->name }}</span>
                <span class="text-gray-600 text-sm">{{ $invite->created_at->format('Y-m-d') }}</span>
            </div>
        @endforeach
     </div>
   </div>



  <div class="mb-6">
    <div class="text-center">
        <span class="font-semibold text-xl">Total Payment For You</span>
    </div>
    <div class="mt-4">
        <div class="bg-white p-4 rounded-md shadow-md text-center">
            <span class="text-2xl font-bold text-blue-500">&#8358;{{ $viewData['total_payment'] }}</span>
        </div>
    </div>
</div>


<div class="max-w-2xl mx-auto mt-8 p-8 bg-white rounded shadow-lg">
    <h1 class="text-3xl font-bold mb-6">{{ __('Creating The Ruumi Affiliate Account') }}</h1>

    <p class="mb-6 text-gray-700">
        Before you create the affiliate account, please make sure you understand the terms for payment:
        <br>
        <span class="font-semibold">Payment Conditions:</span>
        <br>
        1. The user that you invite must post a video of their room as a person looking for a roommate.
        <br>
        2. We must verify the location.
        <br>
        3. Our terms are subject to change.
        <br>
        4. Your account details must be accurate.
    </p>

    <p class="mb-6">
        <h2 class="text-xl font-semibold">You can now create your affiliate account</h2>
    </p>

    <div class="mb-6">
        <h2 class="text-xl font-semibold mb-2">Affiliate Program Terms:</h2>
        <p class="text-gray-700">
            As an affiliate, you earn commissions when the people you invite to the Ruumi platform post videos of their rooms while looking for roommates.
        </p>
    </div>
</div>




<script>
    function copyToClipboard(text) {
        const el = document.createElement('textarea');
        el.value = text;
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);

        // Optionally provide feedback to the user, e.g., show a tooltip or a notification.
        // You can customize this part based on your UI library or preferences.
        alert('Copied to clipboard: ' + text);
    }
</script>


@endsection
