<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Events\PostCreated;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $post = Post::find(8);
       //$post = Post::where('email', 'sjani@yopmail.com')->first();
        //$post = Post::where('gender', 'male')->count();
        //$post = Post::all()->where('gender', 'female')->toArray();
       /*echo "<pre>";
       print_r($post);
       echo "</pre>";
       exit;*/
       if (!Auth::check()){
           return redirect("login")->withSuccess('You are not allowed to access');
       }
    
        $data = Post::latest()->paginate(2);
        $datanew['newdata'] = "asdf";
    
        return view('posts.index',compact('data','datanew'))
            ->with('i', (request()->input('page', 1) - 1) * 2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4|max:10',
            'email' => 'required|email|unique:posts',
            'description' => 'required|max:50',
            'gender' => 'required',
            'designation' => 'required'
        ],[
                'title.required' => 'Title is required',
                'title.min' => 'Minimum 4 charachers require!!',
                'title.max' => 'MAximum 10 charachers require!!',
                'email.required' => 'Email is required',
                'email.unique' => 'Email is already exists!!'
            ]);
    
        $post = Post::create($request->all());
        //event(new PostCreated($post)); // dispatch event from here

        //You can use the below commented code 
        PostCreated::dispatch($post);
     
        return redirect()->route('posts.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //echo $post->id; exit;
        $request->validate([
            'title' => 'required|min:8',
            'email' => 'required|unique:posts,email,'.$post->id.',id',  
            'description' => 'required|max:50',
            'gender' => 'required',
            'designation' => 'required'
        ],[
                'title.required' => 'Title is required',
                'title.min' => 'Minimum 8 charachers require!!',
                'email.required' => 'Email is required',
                'email.unique' => 'Email is already exists!!'
            ]);

        
        $request_data = $request->all();
        //$request_data['gender'] = 'active'; 
    
        $post->update($request_data);
    
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
    
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
}
