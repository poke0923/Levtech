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
        <div class = "posts">
            @foreach($posts as $post)
            <div class = "post">
                <h2 class="title">
                    {{ $post->title }}
                </h2>
                <p class="body">
                    {{ $post->body }}
                </p>
            </div>
            @endforeach
        </div>
    </body>
</html>