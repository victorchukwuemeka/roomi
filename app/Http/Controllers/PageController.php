<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Blog;

class PageController extends Controller
{
   // this function shows the home paga listing of roooms
    public function home()
    {
      $viewData = [];
      $viewData['listings'] = Listing::orderBy('created_at', 'desc')->get();
      $viewData['blogs'] = Blog::all();
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
