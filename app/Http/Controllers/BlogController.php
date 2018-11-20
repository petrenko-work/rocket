<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Blog::orderBy('title');

        if ($request->search) {
            $data = $data->where('title', 'like', '%' . $request->search . '%');
        }

        $data = $data->paginate(3);

        return view('blog', ['data' => $data, 'fresh' => $this->getFreshPosts()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Blog::findOrFail($id);

        $otherPosts = Blog::orderBy('title')
            ->paginate(4);

        return view('post', [
            'post' => $post,
            'fresh' => $this->getFreshPosts(),
            'other' => $otherPosts
        ]);
    }

    private function getFreshPosts()
    {
        return Blog::limit(5)
            ->orderBy('id', 'DESC')
            ->get(['id', 'title']);
    }
}
