@extends('layouts.admin')

@section('content')
    <div class="max-w-2xl mx-auto mt-8 p-8 bg-white rounded shadow">
        <h1 class="text-3xl font-bold mb-6">{{ __('List of Affiliate Users and Their Details') }}</h1>

        @foreach($viewData['affiliates'] as $affiliate)
            <div class="mb-4 border-b pb-4">
                <h2 class="text-xl font-bold">{{ $affiliate->user->name }}</h2>
                <p><strong>Account Number:</strong> {{ $affiliate->get_acc_num() }}</p>
                <p><strong>Bank Name:</strong> {{ $affiliate->get_bank_name() }}</p>
                <p><strong>Location:</strong> {{ $affiliate->get_location() }}</p>
                <p><strong>Affiliate Code:</strong> {{ $affiliate->get_code() }}</p>
                <p><strong>Balance:</strong> {{ $affiliate->get_balance() }}</p>
                <p><strong>Phone Number:</strong> {{ $affiliate->get_phone_num() }}</p>
                <p>
                  <strong>
                    Pay {{$affiliate->user->name}}:
                  </strong>
                  <a href="{{ url('admin/make/payment/form/'.$affiliate->get_id())}}">
                      {{ __("He made 1000k from affiliate ") }}
                  </a>
                </p>
            </div>
        @endforeach

        <div class="mt-4">
            <a href="{{ route('affiliate.payment.index') }}" class="text-blue-500 hover:underline">
                {{ __('Payment Details') }}
            </a>
        </div>

        <!-- Additional divs or content can be added here based on your design requirements -->
    </div>
@endsection
