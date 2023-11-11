<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    
</head>
<body>
    <h1>Blog Name</h1>
    
    <form action="/posts/{{$post -> id}}" method="POST">
    @csrf
    @method('PUT')
    <h2 class="title">title</h2>
    <input type="text" name="post[title]" placeholder="title" value="{{$post -> title}}">
    <p style="color:red; font-weight:bold;" >{{$errors -> first('post.title')}}</p>
    <!--
    入れ子になっている配列はネストされているとみなして、ルートのイメージで「.（ドット）」で繋ぐことができる
    今回はnameで定義した配列postのtitleを取り出したいのでそれ以降はpost.titleで取り出せるようになっている？と思う
    -->
    
    
    
    
    <h2 class="body">body</h2>
    <textarea name="post[body]" placeholder="本文" >{{$post -> body}}</textarea>
    <p style="color:red; font-weight:bold;" >{{$errors -> first('post.body')}}</p>
    <p><input type="submit" value="更新"></p>
    <a href="/">戻る</a>
    
    </form>
    
    
    
</body>

</html>