<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
      $viewData['blogs'] = Blog::all();
      return view('blog.index')->with('viewData', $viewData);
    }

    public function show($id)
    {
      $blog = Blog::findOrFail($id);
      return view('blog.show')->with('blog', $blog);
    }

}
