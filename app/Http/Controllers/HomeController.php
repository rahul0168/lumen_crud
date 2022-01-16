<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        

        $blog = new Blog();
        $blog->name = $request->name;
        $blog->description = $request->description;
        $blog->save();

        //return response()->json("success");
        //return redirect()->back()->with("error", "Login failed!");
        return redirect('/list');


    }
    public function list()
    {   $blog = Blog::all();
        return view('list', compact('blog'));
    }

    public function edit($id)
    {   $blog = Blog::find($id);
        return view('edit', compact('blog'));
    }

    public function update(Request $request,$id)
    {
    
        $blog = Blog::find($id);
        $blog->name = $request->name;
        $blog->description = $request->description;
        $blog->save();

        //return response()->json("success");
        //return redirect()->back()->with("error", "Login failed!");
        return redirect('/list');


    }
    public function delete($id)
    {   $blog = Blog::find($id);
        $blog->delete();
      
    }

    

    //
}
