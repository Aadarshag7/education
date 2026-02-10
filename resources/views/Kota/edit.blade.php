<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-red-200">
    <div class="h-full bg-green-100">
        <form action="{{route('kota.update',$kota->id)}}" method="POST">
            @method('PUT')
            @csrf 
            <input type="text" name="name" value="{{$kota->name}}" placeholder="NAME">
            <input type="number" name="age" value="{{$kota->age}}" placeholder="AGE">
            <button type="submit">DONE</button>
        </form>
    </div>
    
</body>
</html>