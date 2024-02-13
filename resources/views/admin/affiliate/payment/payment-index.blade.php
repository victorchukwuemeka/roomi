@extends('layouts.admin')
@section('content')

@foreach($viewData['payments'] as $payment)
   {{ $payment->get_acc_num()}}
@endforeach
<div class="">
  <a href="{{ url('admin.make.payment.form')}}">
    {{ __('Make A Payment To An Affiliate')}}
  </a>
</div>
@endsection
