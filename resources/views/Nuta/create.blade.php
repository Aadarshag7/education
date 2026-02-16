<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-white">
    <div class="h-full p-2 bg-[radial-gradient(circle,_red,_green)] m-4 shadow-xl shadow-black">
        <form action="{{route('nuta.store')}}" class="flex " method="POST">
            @csrf 
            <input type="text" name="name" placeholder="NAME">
            <input type="number" name="age" placeholder="AGE">
            <button type="submit">DONE</button>
        </form>
    </div>
    
</body>
</html>