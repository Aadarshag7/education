<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-red-500" >
    <div class="h-full m-4 bg-[radial-gradient(circle,_blue,_green)] p-2">
        
        <form action="{{route('dota.store')}}" method="POST">
            @csrf 
            <input type="text" name="name" placeholder="NAME">
            @error('name')
            <div class="text-black">{{$message}}</div>
            @enderror
            <input type="number" name="price" placeholder="PRICE">
            @error('price')
            <div class="text-red-400">{{$message}}</div>
            @enderror
            <button type="submit" class="border-4 p-1 bg-white text-red-500 border-white">DONE</button>
        </form>
    </div>
    
</body>
</html>