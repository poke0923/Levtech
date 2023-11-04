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
        
        <form action="/posts" method="post" >
        @csrf
        <div class = "title">
            <h2>タイトル</h2>
            <p><input type="text" name="post[title]"　placeholder="タイトル"/></p>
        </div>
        
        <div class ="body">
            <h3>本文</h3>
            <textarea name="post[body]" cols="60" rows="20" placeholder="本文"></textarea>
        </div>    

        <input type="submit" value="保存">
        </form>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
     
    </body>
</html>