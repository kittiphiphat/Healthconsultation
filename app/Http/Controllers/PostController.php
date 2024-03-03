<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {
        $posts = Post::with('blogs')->get();
        // return response()->json(['posts' => $posts], 200);
        return view('homeadmin', compact('posts'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $posts = Post::with('blogs')->get();
        return view('show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogs=DB::table('posts')->where('id',$id)->first();
        return view('editadmin',compact('blogs'));
    }

     public function change($id)
    {
        $posts=DB::table('posts')->where('id',$id)->first();
       $data=[
            'status'=>!$posts->status
       ];

       DB::table('posts')->where('id',$id)->update($data);
       return redirect('/admin/home');
    }
    public function update(Request $request,$id)


    {



        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required',
            'phone'=>'required',
            'sex'=>'required',
            'age'=>'required',
            'section'=>'required|max:50',
            'respond'=>'required'

            ]);







        $data =[
            'name'=>$request->name,
            'email'=>$request->email,
            'sex'=>$request->sex,
            'phone'=>$request->phone,
            'age'=>$request->age,
            'section'=>$request->section,
            'respond'=>$request->respond,
            'created_at'=>$request->created_at
        ];
        DB::table('posts')->where('id',$id)->update($data);
        return redirect('/admin/home');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function dashboard()
    {
        return view('adminwelcome');
    }
}
