<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Support;

class AdminSupportTicketController extends Controller
{
    public function index()
    {
       $supports = Support::all();
       return view('admin.support.index')
        ->with('supports', $supports);
    }

}
