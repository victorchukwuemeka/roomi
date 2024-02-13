<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Affiliate;


class AdminAffiliateController extends Controller
{
    public function index()
    {
      $affiliates = Affiliate::all();
      $viewData['affiliates'] = $affiliates;
      return view('admin.affiliate.affiliate-index')->with('viewData', $viewData);
    }


}
