<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-green-400">
    <div class="h-full bg-gradient-to-r from-green-400 to-black">
        <form action="{{route('game.store')}}" method="POST" class=" gap-2 flex flex-col h-full items-start">
            @csrf 
            <label for="name">NAME</label>
            <input type="text" id="name" name="name" placeholder="NAME">
            <label for="price">PRICE</label>
            <input type="number" id="price" name="price" placeholder="PRICE">
            <button type="submit" class="border-4 border-black">DONE</button>
        </form>
    </div>
    
    
</body>
</html>