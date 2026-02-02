<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-white">
    <div class="h-full bg-gradient-to-r m-4 p-2 from-red-400 to-black">
        <form action="{{route('awis.store')}}" method="POST">
            @csrf
            <label for="name">NAME</label>
            <input type="text" id="name" name="name" placeholder="NAME">
            <label for="age">AGE</label>
            <input type="number" id="age" name="age" placeholder="AGE">
            <button type="submit" class="border-4 border-white p-1 rounded-[50%] bg-blue-500 ">Done</button>
        </form>
    </div>
    
</body>
</html>