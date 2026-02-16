<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-white">
    <div class="h-full bg-[radial-gradient(circle,_green,_blue)] m-4 shadow-xl shadow-black">
        <form action="{{route('suta.update',$ruta->id)}}" method="POST">
            @method('PUT')
            @csrf 
            <input type="text" name="name" value="" placeholder="NAME">
            <input type="number" name="age" value="" placeholder="AGE">
            <button type="submit">DONE</button>
        </form>
    </div>
    
</body>
</html>