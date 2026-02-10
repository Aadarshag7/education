<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-white">
    <div class="h-full bg-red-300 m-4">
        <form action="{{route('sota.store')}}" method="POST">
            @csrf  
            <input type="text" name="name" placeholder="NAME">
            <input type="number" name="age" placeholder="AGE" >
            <button type="submit">DONE</button>
        </form>
    </div> 
</body>
</html>