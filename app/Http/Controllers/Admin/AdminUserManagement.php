<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class AdminUserManagement extends Controller
{
    public function index()
    {
      $viewData['users'] =  User::all();
      return view('admin.users.index')->with('viewData', $viewData);
    }

    public function userData($id)
    {
      $viewData['user_data'] = User::find($id);
      return view('admin.users.userData')->with('viewData', $viewData);
    }

    public function destroy($id)
    {
      User::findOrFail($id)->delete();
      return redirect('/admin/dashboard');
    }
}
