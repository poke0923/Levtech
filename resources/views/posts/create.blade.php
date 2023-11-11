<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    
</head>
<body>
    <h1>Blog Name</h1>
    
    <form action="/posts" method="POST">
    @csrf
    <h2 class="title">title</h2>
    <!--
    inputタグのnameを配列（post[カラム名]）で指定することでPostControllerで
    $requestから値を取得するときにキー（postのこと）を指定したら値を引っ張ってこれる
    -->
    
    <input type="text" name="post[title]" placeholder="title" value="{{old('post.title')}}">
    <p style="color:red; font-weight:bold;" >{{$errors -> first('post.title')}}</p>
    <!--
    入れ子になっている配列はネストされているとみなして、ルートのイメージで「.（ドット）」で繋ぐことができる
    今回はnameで定義した配列postのtitleを取り出したいのでそれ以降はpost.titleで取り出せるようになっている？と思う
    -->
    
    
    
    
    <h2 class="body">body</h2>
    <textarea name="post[body]" placeholder="本文" >{{old('post.body')}}</textarea>
    <p style="color:red; font-weight:bold;" >{{$errors -> first('post.body')}}</p>
    <p><input type="submit" value="保存"></p>
    
    </form>
    
    
    
</body>

</html>