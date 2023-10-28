<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.post.index', ['data' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Post();

        $data->title = $request->get('title');
        $data->cover_image = $request->get('cover_image');
        $data->content = $request->get('content');
        

        if($data->save()){
            return redirect()->route('post.index');
        } else {
            return back()->withInput(Input::all());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.post.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.post.edit', ['data' => Post::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Post::find($id);

        $data->title = $request->get('title');
        $data->cover_image = $request->get('cover_image');
        $data->content = $request->get('content');

        if($data->save()){
            return redirect()->route('post.index');
        } else {
            return back()->withInput(Input::all());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);
        return redirect()->route('post.index');
    }
}
