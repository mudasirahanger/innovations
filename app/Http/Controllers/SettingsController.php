<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universities;
use App\Models\Departments;
class SettingsController extends Controller
{


    public function index()
    {
        // Fetch all posts and pass them to the view
       
         $universities = Universities::all();
         $departments = Departments::all();

         return view('settings', ['universities' =>$universities ,'departments' => $departments]);
    }

    public function create()
    {
        //return view('blog-posts.create');
    }

    public function store(Request $request)
    {
        // Validate and store the new blog post
        // BlogPost::create($request->all());
        // return redirect()->route('blog-posts.index');
    }

    public function edit($id)
    {
        // $post = BlogPost::findOrFail($id);
        // return view('blog-posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // $post = BlogPost::findOrFail($id);
        // $post->update($request->all());
        // return redirect()->route('blog-posts.index');
    }

    public function destroy($id)
    {
        // $post = BlogPost::findOrFail($id);
        // $post->delete();
        // return redirect()->route('blog-posts.index');
    }
}
