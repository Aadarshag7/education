<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-blue-500">
    <div class="h-full bg-blue-300 m-4">
     <form action="{{route('game.update',$game->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$game->name}}" id="name">
         <input type="number" name="price" value="{{$game->price}}" id="price">
         <button type="submit">DONE</button>
     </form>
     </div>
    
</body>
</html>