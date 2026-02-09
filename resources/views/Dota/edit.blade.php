<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-green-500">
    <div class="h-full bg-red-200 p-2 m-4">
        <form action="{{route('dota.edit',$dota->id)}}" method="POST">
            @csrf 
            @method('PUT')
            <input type="text" name="name" value="{{$dota->name}}" placeholder="NAME">
            <input type="number" name="price" value="{{$dota->price}}" placeholder="PRICE">
            <button type="submit" class="border-3 border-black bg-black text-white p-2">Done</button>

        </form>
    </div>
    
</body>
</html>