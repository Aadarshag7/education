<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-yellow-500">
    <div class="h-full m-5 p-4 bg-gradient-to-t from-black to-white">
        <form action="{{route('fast.update',$fast->id)}}" method="POST">
            @csrf 
            @method('PUT')
            <label for="name">NAME </label>
            <input type="text" name="name" value="{{$fast->name}}" id="name" placeholder="NAME">
            <label for="price">PRICE</label>
            <input type="number" name="price" id="price" value="{{$fast->price}}" placeholder="PRICE">
            <button type="submit" class="border-4 border-black p-1">DONE</button>
        </form>
    </div>
    
</body>
</html>