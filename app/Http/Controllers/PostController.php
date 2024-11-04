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
        return $post->get(); // Postモデルのすべてのデータを取得して返す
    }
}
