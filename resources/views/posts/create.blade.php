<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
        <meta charset="utf-8" />

    </head>
    <body>
        <h1>
            Blog Name
        </h1>
        
        <form action="/posts" method="POST" >
        @csrf
        <div class = "title">
            <h2>タイトル</h2>
            <input type="text" name="post[title]"　placeholder="タイトル" value="{{ old('post.title') }}"/>
            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        </div>
        
        <div class ="body">
            <h3>本文</h3>
            <textarea name="post[body]" cols="60" rows="20" placeholder="本文">{{ old('post.body') }}</textarea>
            <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>    

        <input type="submit" value="store">
        </form>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
     
    </body>
</html>