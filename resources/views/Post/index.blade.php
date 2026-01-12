<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen">
    
    @if($posts->count())
    @foreach($posts as $post)
    
    <div class= "h-full bg-[radial-gradient(circle,_black,_white)]">
        @can('create post')
        <a href="{{route('post.create')}}" class=" relative top-3 border-8 border-black rounded-[50%]">Add Post</a>
        @endcan
    
        <h1>{{$post->title}} {{$post->content}}</h1>
    </div>
    @endforeach
    @else
    <p>NO ITEM</p>
    @endif
    
</body>
</html>