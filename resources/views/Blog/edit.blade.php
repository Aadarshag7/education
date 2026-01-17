<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen">
    <div class="h-full m-4 p-2 bg-green-400">
        <form action="{{route('blog.update',$blog->id)}}" method="POST">
            @method('PUT')
            @csrf 
            <input type="text" name="name" value="{{$blog->name}}" id="name" placeholder="NAME">
            <input type="number" name="age" id="age" value="{{$blog->age}}" placeholder="AGE">
            <button type="submit" class="border-4 border-black p-1">DONE</button>
        </form>
    </div>
    
</body>
</html>