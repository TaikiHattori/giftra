<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;      //ユーザー

use Illuminate\Session\Middleware\StartSession;   //preview_complete

class GiftController extends Controller
{
    public const SESSION_KEY_GIFT_ID = 'SESSION_GIFT_ID';
    /**
     * Display a listing of the resource.記事一覧表示
     */
    public function index(Request $request, $id)
    {   
        // データベースからギフトの情報を取得
        $gift = Gift::find($id); // 仮にGiftモデルを使用する場合の例

        // データが存在しない場合の処理
        if (!$gift) {
            abort(404); // 例として404エラーを表示する
        }

        $request->session()->put(self::SESSION_KEY_GIFT_ID, $id);

        // ビューにデータをまとめて渡して表示
        return view('present', [
            'message' => $gift->message,
            'giftername' => $gift->giftername,
            'giftphoto' => $gift->giftphoto,
            'giftname' => $gift->giftname,
            'giftfee' => $gift->giftfee,
        ]);
    }





    /**
     * Show the form for creating a new resource.記事投稿画面表示
     */
    public function create()
    {
        return view('giftcard');
    }
    
    
    public function create_plan()
    {
        return view('plan');
    }



    /**
     * Store a newly created resource in storage.記事投稿処理
     */
    public function store(Request $request)
    {


        // Eloquentモデル
        $gifts = new Gift();
        $gifts->user_id    = Auth::user()->id; //追加のコード //Auth::user()->idは、ログインしてないとエラーになる
        $gifts->message    = $request->message;
        $gifts->giftername = $request->giftername;
        $gifts->giftphoto  = $request->giftphoto;
        $gifts->giftname   = $request->giftname;
        $gifts->giftfee    = $request->giftfee;
        $gifts->save();
        return view('giftcard-complete', ['presentid' => $gifts->id]);
        
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


    public function preview(Request $request)
    {

        // データを直接ビューに渡す
        return view('giftcard-preview', $request);
    }

   

}
