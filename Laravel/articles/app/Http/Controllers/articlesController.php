<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;

class articlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = article::latest()->paginate(5);
    
        return view('articles.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 2);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
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
            'name' => 'required|min:4|max:16|unique:articles',
            'description' => 'required',
            'status'=>'required',
        ],[
                'fname.required' => 'First Name is required',
                'fname.unique' => 'First Name Must Be Unique',
                'email.required' => 'Email is required',
        ]);
    
        article::create($request->all());
     
        return redirect()->route('articles.index')
                        ->with('success','Post created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(article $article)
    {
        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        return view('articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, article $article)
    {
        $request->validate([
            'name' => 'required|min:4|max:16',
            'description' => 'required',
            'status'=>'required',
        ],[
                'fname.required' => 'First Name is required',
                'fname.unique' => 'First Name Must Be Unique',
                'email.required' => 'Email is required',
        ]);

        $request_data = $request->all();
    
        $article->update($request_data);
    
        return redirect()->route('articles.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
        $article->delete();
    
        return redirect()->route('articles.index')
                        ->with('success','Post deleted successfully');
    }
}
