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
    public function update(Request $request, $id)
    {
        // Validate incoming data
        $request->validate([

            'respond' => 'required'
        ]);

        // Prepare data for update
        $data = [

            'respond' => $request->respond
        ];

        // Perform update operation
        $updateResult = DB::table('posts')->where('id', $id)->update($data);

        // Check if update was successful
        if ($updateResult) {
            // If update was successful, redirect
            return redirect('/admin/home');
        } else {
            // If update failed, handle the error (e.g., return to a form with an error message)
            // For simplicity, let's return to the same form with an error message
            return back()->with('error', 'Failed to update the record.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */

     public function destroy($id)
     {
        DB::table('posts')->where('id',$id)->delete();
        return redirect('/admin/home');
     }
    public function dashboard()
    {
        return view('adminwelcome');
    }
}
