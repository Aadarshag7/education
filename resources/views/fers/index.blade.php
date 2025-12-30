<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
    <body class="h-screen bg-blue-200">
    <div class="h-[300px] m-4 bg-red-300">
        <a href="{{route('create')}}" class="border-8 border-black relative left-4 top-3"> Add</a>
    </div>
    @if ($fers->count())
    @foreach ($fers as $fer)
    <div class="h-[300px] bg-gradient-to-r from-yellow-300 to-green-400">
        <h1 class="text-black p-2">{{$fer->title}} {{$fer->content}} </h1>
        <a href="{{route('edit',$fer->id)}}" > Edit </a>
        <!-- <p class="text-black  p-2">{{$fer->content}}</p> -->
    </div>
    @endforeach
    @else
    <p>NO Items Found</p>
    @endif
</body>
</html>