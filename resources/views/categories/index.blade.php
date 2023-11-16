<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    
</head>
<body>
    <h1>Blog Name</h1>
    <a href="/posts/create">create</a>
    @foreach( $posts as $post)
    
    <a href="/posts/{{ $post -> id }}">
        <h2 class="title">{{$post -> title}}</h2>
    </a>
    
    <p class="body">{{$post -> body}}</p>
    <a href="/category/{{$post->category->id}}">
        <p class="category">{{$post->category->name}}</p>
    </a>
    
    <a href="/posts/{{$post -> id}}/edit">
        <p>edit</p>
    </a>
    <form action="/posts/{{$post -> id}}" id="form_{{ $post->id }}" method="POST">
        @csrf
        @method('DELETE')
        <!--
        javascriptを使わないならこの書き方でOK。シンプルで保守性も高い。
        ほかのロジックを追加したい場合などはjavascriputを使った方がよい。
        <input type="submit" value="delete" onclick="return confirm('削除すると復元できません。本当に削除しますか。')">
        -->
        
        <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
        <!--
        <input type="button" value="delete" onclick="deletePost({{ $post->id }})">
        これでもいいが、<button>タグは終了タグがあるので、その間に画像データを入れ子にしたり、
        cssでそのデザインなどもいろいろ付け加えやすいので送信ボタンでinputは使わないのが今どき。
        
        -->
    </form>
    
    </a>
    
    @endforeach
    
    {{ $posts -> links()}}
    
    <script>
        function deletePost(id){
            if(confirm("本当に削除しますか")){
                document.getElementById(`form_${id}`).submit()
            }
        }
    </script>
   
</body>

</html>