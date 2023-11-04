<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
        <meta charset="utf-8" />

    </head>
    <body>
        <h1 class="title">
            編集画面
        </h1>
        
        <form action="/posts/{{$post -> id}}" method="POST" >
        @csrf
        @method('PUT')
        <div class = "title">
            <h2>タイトル</h2>
            <input type="text" name="post[title]"　placeholder="タイトル" value="{{ $post -> title }}"/>
            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        </div>
        
        <div class ="body">
            <h3>本文</h3>
            <textarea name="post[body]" cols="60" rows="20" placeholder="本文">{{ $post -> body }}</textarea>
            <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>    

        <input type="submit" value="update">
        </form>
        
        <div class="footer">
            <a href="/posts/{{ $post -> id}}">戻る</a>
        </div>
     
    </body>
</html>