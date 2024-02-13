<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Affiliate;


class AdminPaymentController extends Controller
{
    public function index()
    {
      $payments = Payment::all();
      $viewData['payments'] = $payments;
      return view('admin.affiliate.payment.payment-index')->with('viewData',$viewData);
    }

    public function storePaymentDetails(Request $request)
    {
      $new_payment = new Payment();
      $new_payment->set_affiliate_id($request->input('affiliate_id'));
      $new_payment->set_amount($request->input('amount'));
      $new_payment->set_bank_name($request->input('affiliate_id'));
      $new_payment->set_acc_num($request->input('account_num'));
      $new_payment->save();

      return redirect('affliate/payment/index');
    }

    public function makePaymentForm($id)
    {
      if (Affiliate::findOrFail($id)) {
        $affiliate_id = $id;
      }
      return view('admin.affiliate.payment.payment-form')
      ->with('affiliate_id',$affiliate_id);
    }


}
