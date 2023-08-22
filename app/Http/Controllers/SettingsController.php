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
        $request->validate([
            'name' =>  ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
        ]);
        if($request->type == 'uni') {
                Universities::create([
                    'name' => $request->name,
                    'status' => '1'
                ]);
                return redirect()->route('settings')->with('success', 'Added Successfully');
        } 
        if($request->type == 'dept') {
            Departments::create([
                'name' => $request->name,
                'status' => '1'
            ]);
             return redirect()->route('settings')->with('success', 'Added Successfully');
        }

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

    public function destroy($id,$type)
    {
         if(!empty($type) && $type == 'uni') { 
          $uni = Universities::findOrFail($id);
          $uni->delete();
          return redirect()->route('settings')->with('success', 'Deleted Successfully');
         } else if(!empty($type) && $type == 'dept'){
            $dept = Departments::findOrFail($id);
            $dept->delete();
            return redirect()->route('settings')->with('success', 'Deleted Successfully');
         }

         
         
    }
}
