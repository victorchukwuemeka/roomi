<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;


class AdminListingModerationController extends Controller
{
    public function index()
    {
      $viewData['listings'] = Listing::all();
      return view('admin.listing.index')->with('viewData', $viewData);
    }


    public function destroy($id)
    {
      Listing::findOrFail($id)->delete();
      return redirect('/admin/listing');
    }
}
