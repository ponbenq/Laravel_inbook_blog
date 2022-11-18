<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = posts::paginate(3);
        return view('posts.index')->with('post', $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //varidate the data
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
        //store in the database
        $post = new posts;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        session()->flash('success', 'The Blog post was successfully save!');
        return redirect()->route('posts.show', $post->id);

        //redirect to another page
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = posts::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and save as a var
        $post = posts::find($id);
        //return the view and pass in the var we previously created
        return view('posts.edit')->with('post', $post);
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
        // Validate the data
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
        // Save the data to the database
        $post = posts::find($id);

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();
        // set flash  data with  success message
        session()->flash('success', 'This post was successfully saved.');
        //redirect with flash data to post.show
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
        // find item to delete
        $post = posts::find($id);

        $post->delete();

        session()->flash('success', "The post was successfully deleted.");
        //redirect to welcome or index page by use action method to send to PagesController and method in that controller
        return redirect()->action([PagesController::class, 'getIndex']);
    }
}
