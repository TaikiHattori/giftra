<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;      //ユーザー

class PostController extends Controller
{
    /**
     * Display a listing of the resource.記事一覧表示
     */
    public function index()
    {
        return view('photo');

    }

    /**
     * Show the form for creating a new resource.記事投稿画面表示
     */
    public function create()
    {
        return view('post');
    }

    /**
     * Store a newly created resource in storage.記事投稿処理
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $path = $image->store('public/images');
        
        // Eloquentモデル
        $posts = new Post();
        $posts->user_id    = Auth::user()->id; //追加のコード //Auth::user()->idは、ログインしてないとエラーになる
        $posts->path       = $path;
        $posts->location   = $request->location;
        $posts->latitude   = $request->latitude;
        $posts->longitude  = $request->longitude;
        $posts->comment    = $request->comment;
        $posts->save(); 
        return redirect('/');
    }

    /**
     * Display the specified resource.記事詳細表示
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.記事投稿画面表示
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.記事編集処理
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.記事削除処理
     */
    public function destroy(Post $post)
    {
        //
    }
}
