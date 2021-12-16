<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Post;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', ['posts' => $posts]);
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
        //dd($request['username']);
        $validatedData = $request->validate([
            'title' => 'required|max:25',
            'contents' => 'required|max:255',
            'image' => 'required|mimes:png',
        ]);
        //return "Passed Validation";
        $newImageName = time() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        $p = new Post;
        $p->title = $validatedData['title'];
        $p->contents = $validatedData['contents'];
        $p->image = $newImageName;
        $p->user_id = Auth::id();
        $p->group_id = $request->group_id;
        $p->save();

        session()->flash('message', 'Post created successfully.');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        //dump($profile);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if ($post->user_id !== auth()->user()->id) {
            session()->flash('message', 'You  do not have permission to edit this post.');
            return redirect()->back();
        } else {
            return view('posts.edit', ['post' => $post]);
        }
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
        //dd($request['username']);
        $this->validate($request, array(
            'title' => 'required|max:25',
            'contents' => 'required|max:255',
            'image' => 'required|max:255',
        ));
        //return "Passed Validation";

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->contents = $request->input('contents');
        $post->image = $request->input('image');
        $post->user_id = $request->input('user_id');
        $post->group_id = $request->input('group_id');
        $post->save();

        session()->flash('message', 'Post edited successfully.');
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
        if ($post->user_id !== auth()->user()->id) {
            session()->flash('message', 'You  do not have permission to delete this post.');
            return redirect()->back();
        } else {
            $post->delete();

            session()->flash('message', 'Post deleted successfully.');
            return redirect()->route('posts.index');
        }
    }
}
