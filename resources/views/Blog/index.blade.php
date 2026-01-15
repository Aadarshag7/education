<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen">
    @if($blogs->count())
    @foreach($blogs as $blog)
    <div class="h-full bg-blue-100">
        @can('create blog')
        <a href="{{route('blog.create')}}">Add</a>
        @endcan
        
        <p>{{$blog->name}} {{$blog->age}}</p>
    </div>
    @endforeach
    @else
    <p>NO ITEMS</p>
    @endif
    
</body>
</html>