<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
        <meta charset="utf-8" />

    </head>
    <body>
        <h1 class="title">
            {{ $post ->title}}
        </h1>
        <div class = "content">
           
            <div class = "content_post">
                <h3>本文</h3>
                <p class="body">
                    {{ $post->body }}
                </p>
            </div>
            <div class="edit">
                <a href="/posts/{{ $post -> id}}/edit">edit</a>
            </div>
            <div class="footer">
                <a href="/">back</a>
            </div>
        </div>
     
    </body>
</html>