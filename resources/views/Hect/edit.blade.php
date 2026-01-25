<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-white" >
    <div class="h-full bg-black m-9 p-2 shadow-xl shadow-red-900 ">
        <form action="{{route('hect.update',$hect->id)}}" method="POST">
        @csrf 
        @method('PUT')
        <label for="name">NAME</label>
        <input type="text" name="name" id="name" value="{{$hect->name}}" placeholder="NAME">
        <label for="age">AGE</label>
        <input type="number" name="age" id="age" value="{{$hect->age}}" placeholder="AGE">
        <button type="submit">Done</button>
  </form>
    </div>
    
</body>
</html>