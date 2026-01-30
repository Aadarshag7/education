<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-red-300">
    <div class="h-full bg-[radial-gradient(circle,_blue,_red)]">
        <form action="{{route('seco.store')}}" method="POST">
            @csrf 
            <label for="name">NAME</label>
            <input type="text" name="name" id="name" placeholder="NAME">
            <label for="age">AGE</label>
            <input type="number" name="age" id="age" placeholder="AGE">
            <button type="submit">DONE</button>
        </form>
    </div>
    
</body>
</html>