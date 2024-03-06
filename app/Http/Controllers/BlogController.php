<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $blogs = Blog::with('posts')->get();
        return view('blog', compact('blogs'));



    }


    public function about()
    {

        return view('about');


    }

    public function insert(Request $request)
    {

        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required',
            'phone' => 'required',
            'sex' => 'required',
            'age' => 'required',
            'section' => 'required|max:50',
            'content' => 'required'
        ]);


        $blog = new Blog();
        $blog->name = $request->name;
        $blog->email = $request->email;
        $blog->phone = $request->phone;
        $blog->sex = $request->sex;
        $blog->age = $request->age;
        $blog->section = $request->section;
        $blog->content = $request->content;
        $blog->save();


        $postId = $request->input('post_id'); // สมมติว่า post_id เป็นชื่อ field ในฟอร์มที่เก็บ ID ของโพสที่เลือก
        $blog->posts()->attach($postId);


        return redirect('/blog');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('from');
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        return view('home');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $blog=DB::table('blogs')->where('id',$id)->first();
        return view('edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)


    {



        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required',
            'phone'=>'required',
            'sex'=>'required',
            'age'=>'required',
            'section'=>'required|max:50',
            'content'=>'required'

            ]);







        $data =[
            'name'=>$request->name,
            'email'=>$request->email,
            'sex'=>$request->sex,
            'phone'=>$request->phone,
            'age'=>$request->age,
            'section'=>$request->section,
            'content'=>$request->content,
            'created_at'=>$request->created_at
        ];
        DB::table('blogs')->where('id',$id)->update($data);
        return redirect('blog');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       DB::table('blogs')->where('id',$id)->delete();
       return redirect('/blog');
    }


    public function dashboard()
    {
        return view('welcome');
    }


}
