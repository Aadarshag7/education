<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-red-200">
    <div class="h-full bg-red-500 m-3">
        <form action="{{route('hect.store')}}" method="POST" class="flex flex-col items-start  p-2">
            @csrf 
            <label for="name">NAME</label>
            <input type="text" name="name" id="name" placeholder="NAME">
            <label for="age">AGE</label>
            <input type="number" name="age" id="age" placeholder="AGE">
            <button type="submit" class="shadow-xl transition-transform duration-0.2 hover:translate-y-[20px]">DONE</button>
        </form>
    </div>
    
</body>
</html>