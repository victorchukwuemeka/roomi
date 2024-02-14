<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAffiliateRequest;
use Illuminate\Http\Request;
use App\Models\Affiliate;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AffiliateController extends Controller
{
    public function showAffiliateForm()
    {
      return view('affiliates.create-affiliate-account');
    }

    public function storeAffiliateData(StoreAffiliateRequest $request)
    {
      //dd($request);
      $validated = $request->validated();
      //dd($validated);
      $user_id_in_session = Auth::id();
      $affiliate_code = substr(md5(time()), 0, 8);

      $new_affiliate = new Affiliate();
      $new_affiliate->set_location($request->input('location'));
      $new_affiliate->set_acc_num($request->input('Acc_num'));
      $new_affiliate->set_bank_name($request->input('bank_name'));
      $new_affiliate->set_phone_num($request->input('phone_num'));
      $new_affiliate->set_user_id($user_id_in_session);
      $new_affiliate->set_code($affiliate_code);
      $new_affiliate->save();
      return $this->index();
    }


    public function index(){


      $user = User::findOrFail(Auth::id());
      $user_affiliate_account =  Affiliate::where('user_id', Auth::id())->first();

      if($user_affiliate_account){
        //all the house keeping variable needed
        $user_affiliate_id = $user_affiliate_account->get_id();
        $user_affiliate_code = $user_affiliate_account->get_code();
        $users_you_invited = $this->getUsersWithLeadCode($user_affiliate_code);
        $payment_data = $this->yourPaymentData($user_affiliate_id);
        $total_payment = $this->sumPaymentAmount($user_affiliate_id);

        //the data that is to be passed to the view
        $viewData['payment_data'] = $payment_data;
        $viewData['affiliate_user'] = $user;
        $viewData['users_you_invited'] = $users_you_invited;
        $viewData['user_affiliate_code'] = $user_affiliate_code;
        $viewData['total_payment'] = $total_payment;
        return view('affiliates.affiliate-index')->with('viewData', $viewData);
      }
       return $this->showAffiliateForm();
    }


    public function getUsersWithLeadCode($leadCode)
    {
        return User::where('lead_code', $leadCode)->get();
    }

    public function yourPaymentData($user_affiliate_id)
    {
      return Payment::where('affiliate_id', $user_affiliate_id)->get();
    }


    public function sumPaymentAmount($user_affiliate_id)
    {
      $payment = $this->yourPaymentData($user_affiliate_id);

      $sum = $payment->sum('amount');

      return $sum;
    }


}
