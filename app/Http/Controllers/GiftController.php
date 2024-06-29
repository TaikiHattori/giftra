<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;      //ユーザー

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.記事一覧表示
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.記事投稿画面表示
     */
    public function create()
    {
        return view('giftcard');
    }

    /**
     * Store a newly created resource in storage.記事投稿処理
     */
    public function store(Request $request)
    {
        // Eloquentモデル
        $gifts = new Gift;
        $gifts->user_id    = Auth::user()->id; //追加のコード
        $gifts->message    = $request->message;
        $gifts->giftername = $request->giftername;
        $gifts->giftphoto  = $request->giftphoto;
        $gifts->giftname   = $request->giftname;
        $gifts->giftfee    = $request->giftfee;
        $gifts->save(); 
        return view('giftcard-complete');
        
    }

    /**
     * Display the specified resource.記事詳細表示
     */
    public function show(Gift $gift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.記事編集画面表示
     */
    public function edit(Gift $gift)
    {
        //
    }

    /**
     * Update the specified resource in storage.記事編集処理
     */
    public function update(Request $request, Gift $gift)
    {
        //
    }

    /**
     * Remove the specified resource from storage.記事削除処理
     */
    public function destroy(Gift $gift)
    {
        //
    }

    /**
     * 記事確認画面
     */
    public function preview(Gift $gift)
    {
        // $data = $gift->all();
        // return view('giftcard-preview', compact('data'));
        return view('giftcard-preview');
    }
}
