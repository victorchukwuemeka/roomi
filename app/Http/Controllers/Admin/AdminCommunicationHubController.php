<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCommunicationHubController extends Controller
{
    public function index()
    {
      return view('admin.communication.index');
    }
}
