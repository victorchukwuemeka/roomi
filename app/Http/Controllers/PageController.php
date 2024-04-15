<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class PageController extends Controller
{
   // this function shows the home paga listing of roooms
    public function rooms()
    {
      $listings = Listing::orderBy('created_at', 'desc')->get();
    //dd($listings);
      $viewData = [];
      $viewData['listings'] = $listings;
      return view('dashboard')->with('viewData', $viewData);
    }


    public function about()
    {
      return view('about');
    }

    public function contact()
    {
      return view('contact');
    }
}
