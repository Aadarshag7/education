<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-black">
    <div class="h-full bg-white m-7 p-2">
        <form action="{{route('seco.update',$seco->id)}}" method="POST">
            @csrf 
            @method('PUT')
            <label for="name">NAME</label>
            <input type="text" name="name" id="name" value="{{$seco->name}}" placeholder="NAME">
            <label for="age">AGE</label>
            <input type="number" name="age" id="age" value="{{$seco->age}}" placeholder="AGE">
            <button type="submit">DONE</button>
        </form>
    </div>
    
</body>
</html>