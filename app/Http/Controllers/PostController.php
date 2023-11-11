<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;


class PostController extends Controller
{
    //(Post $post)のようにfunctionで作成するmethodの引数にクラスのインスタンスを
    //変数として渡すことをメソッドインジェクションという
    //ネストされている要素を指定するときは「.（ドット）」で繋ぐことで指定できる
    public function index(Post $post){
       return view('posts.index') -> with(['posts' => $post -> getPaginate()]);
    }
   
   //↓これでもできるが、ControllerにSQLのコマンドなどを書いていくと長くなりすぎることがある
   //そのため、SQL的な文章はModelに書いて、Controllerで呼び出すのが望ましい。
   /* 
    public function index(){
    	$post = Post::orderBy('updated_at', 'DESC')->paginate(3);
    	return view('posts.index', ['posts'=> $post]);1}
    	
    	これを使った場合、Modelには何も書かなくて良い
    */
    
    public function show(Post $post){
        
        return view('posts.show') -> with( ['post' => $post]);
    }
    //↓の両方のパターンでもwithに入れた値（引数）とModelが参照する変数名を合わせる必要がある。
    /*
    特にidを指定しているわけではないが、web.phpでのルーティングの時に
    暗黙の結合によりidが指定されている状態になっている。
    （このときwith内の引数はインスタンス化したModelを格納した変数と同じ文字列に
    する必要がある＝web.phpで暗黙の照合使ったのと同じイメージ）
    （今回の場合ルーティングに合わせて、with内の引数も$postでなくてはならない）
    */
    
    /*
    もし暗黙の結合を使わない場合？
    with( ['posts' => $post -> find( $post -> id )]);
    のようにwith内に新たな変数を設定し、findメソッドを用いて指定したidのrecordを取り出す。
    ただ、これも結局、指定されたidがわかっていないので暗黙の結合使っている気もする…
    とりあえず得られる結果は同じになっている。。。
    */
    
    public function create(){
        return view('posts.create');
    }
    
    public function store(PostRequest $postrequest, Post $post){
        
        $input = $postrequest->input('post');
        /*
        $input = $request['post']でOK。これはphpの書き方の一つで、$配列名['キー名']でそのキーに対応する値を持って来れる
        ★Requestはそのままだとパラメータとして各項目の値を保持しているだけで、配列にはなっていない★
        fillは配列でないと使うことができないため、配列にして取得している
        fillを使わないのであれば、配列にする必要がないのでcreate.blade.phpのinputタグのnameをtitleなどのみにして
        $post->title = $request->input('title');などで$postに値を取得し、$post->save()で更新も可能
        */
        $post -> fill($input) ->save();
        return redirect('/posts/'.$post->id);
        //redirectは引数としてURLを指定し、そのURLに対してのgetメソッドをリクエストする
    }
    
    public function edit(Post $post){
        return view('posts.edit') -> with(['post'=>$post]);
    }
    
    public function update(PostRequest $request, Post $post){
       $update = $request['post'];
       $post -> fill($update) -> save();
       //$post -> update($update);でもOKだが、
       //updateの場合は全く内容更新していなくてもupdated_atなどの日時が更新されてしまう
        return redirect('/posts/'.$post -> id);
    }
    
    public function delete(Post $post){
        $post -> delete(); 
        return redirect('/');
    }
}
