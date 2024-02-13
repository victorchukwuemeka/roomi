@extends('layouts.admin')

@section('content')
    <div class="max-w-md mx-auto mt-8 p-8 bg-white rounded shadow">
        <h1 class="text-3xl font-bold mb-6">{{ __('Affiliate Payment Information') }}</h1>

        <form action="{{ route('admin.store.payment.details') }}" method="post">
            @csrf

            <!-- Hidden Affiliate ID Field -->
            <input type="hidden" id="affiliate_id" name="affiliate_id" value="{{ $affiliate_id }}">
             <!-- Set $affiliateId with the correct value -->

            <div class="mb-4">
                <label for="bank_name" class="block text-sm font-medium text-gray-700">Bank Name</label>
                <input type="text" id="bank_name" name="bank_name" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="account_number" class="block text-sm font-medium text-gray-700">Account Number</label>
                <input type="text" id="account_num" name="account_num" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                <input type="text" id="amount" name="amount" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">
              Submit Payment Information
            </button>
        </form>
    </div>
@endsection
