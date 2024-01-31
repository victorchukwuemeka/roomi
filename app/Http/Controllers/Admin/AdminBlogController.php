<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;


class AdminBlogController extends Controller
{
    public function index()
    {
      return view('admin.blog.index');
    }

    public function create()
    {
      return view('admin.blog.create');
    }

    public function showAllBlogPost()
    {
      $viewData['blogs'] = Blog::all();
      return view('admin.blog.showAll')->with('viewData', $viewData);
    }

    public function store(Request $request)
    {
      //Blog::validate($request);
       //dd($request->input('body'));
      $blog = new Blog();
      $title = $request->input('title');
      $body = $request->input('body');
      $user_id = $user_id_in_session = Auth::id();
       //dd($user_id);
      $blog->set_title($title);
      $blog->set_body($body);
      $blog->set_user_id($user_id);
      $blog->save();
      return redirect('/admin/blog');
    }

    public function editForm($id)
    {
      $viewData['blog'] = Blog::findOrFail($id);
      return view('admin.blog.editForm')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
      $blog = Blog::findOrFail($id);
      $title = $request->input('title');
      $body = $request->input('body');
      $user_id = $user_id_in_session = Auth::id();
      if ($user_id) {
        $blog->set_title($title);
        $blog->set_body($body);
        $blog->set_user_id($user_id);
        $blog->save();
        return redirect('/admin/blog');
      }else{
        return redirect('/admin/login');
      }

    }

    public function show($id)
    {
      $viewData['blog'] = Blog::findOrFail($id);
      return view('admin.blog.show')->with('viewData', $viewData);
    }

    public function destroy($id)
    {
      Blog::findOrFail($id)->delete();
      return view('admin.blog.index');
    }

}
