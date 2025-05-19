<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        // postsテーブルから全てのデータを取得し、変数$productsに代入する
        $posts = DB::table('posts')->get();

        // 変数postsをposts/index.blade.phpファイルに渡す
        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        // URL'/posts/{id}'の'{id}'部分と主キー（idカラム）の値が一致するデータを
        // productsテーブルから取得し、変数$productに代入する
        $post = Post::find($id);

        // 変数$productをproducts/show.blade.phpファイルに渡す
        return view('posts.show', compact('post'));
    }
}
