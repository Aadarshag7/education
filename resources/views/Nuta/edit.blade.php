<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-white">
    <div class="h-full bg-green-200 m-4 p-2 shadow-xl shadow-black">
     <form action="{{route('nuta.update',$nuta->id)}}" class="flex gap-4" method="POST">
        @method('PUT')
        @csrf 
        <input type="text" name="name" value="{{$nuta->name}}" placeholder="NAME">
        <input type="number" name="age" value="{{$nuta->age}}" placceholder="AGE">
        <button type="submit" class="border-4 border-white  bg-black text-white p-2">DONE</button>
     </form>
    </div> 
</body>
</html>