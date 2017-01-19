<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable
        $posts = Post::orderBy('id','desc')->paginate(10);
        //return a view
        return view('posts.index')->withPosts($posts);
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
        //validate the data
        $this->validate($request, array(
            'title' => 'required|max:225','body' => 'required'

            ));
        //storing into database
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        Session::flash('success','The Bog is successfully saved');
        //redirecting to other page
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id); 
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post
            $post = Post::find($id);
        //return the view
            return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate the data
            $this->validate($request, array(
            'title' => 'required|max:225','body' => 'required'
            ));
        //save the data to DB
            $post = Post::find($id);

            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->save();
        //set flash data
            Session::flash('success','This post is successfully saved.');
        //redirect with flash data
            return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'The post is successfully deleted');
        return redirect()->route('posts.index');
    }

    public function storedata(Request $request){

        $name=$request->get('name');
        $email=$request->get('email');
        $message=$request->get('message');

    return $name;

    }


}
