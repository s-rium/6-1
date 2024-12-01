<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;//Postモデルのuse宣言を追加

class PostController extends Controller
{
    /**
 * Post一覧を表示する
 *
 * @param Post $post Postモデル
 * @return \Illuminate\Database\Eloquent\Collection
 */
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(3)]);  
        //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
}
