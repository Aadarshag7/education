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
    <div class= "h-full bg-[radial-gradient(circle,_black">
        <h1>{{$post->title}} {{$post->content}}</h1>
    </div>
    
</body>
</html>