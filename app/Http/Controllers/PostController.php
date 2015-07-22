<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(config('siteconfig.per_page'));

        $page_title = '文章總覽';
        return view('posts.index', compact('posts', 'page_title'));
    }

    public function hot()
    {
        $posts = Post::orderBy('page_views', 'desc')->paginate(config('siteconfig.per_page'));

        $page_title = '熱門文章';
        return view('posts.index', compact('posts', 'page_title'));
    }

    public function my()
    {
        //$user = \Auth::user();
        $posts = Post::where('user_id', 1)->orderBy('created_at', 'desc')->paginate(config('siteconfig.per_page'));

        $page_title = '我的文章';
        return view('posts.index', compact('posts', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::with('user', 'comments')->findOrFail($id);
        $page_title = $post->title;

        $post->page_views++;
        $post->save();

        return view('posts.show', compact('post', 'page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
