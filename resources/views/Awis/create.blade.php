<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-red-300">
    <div class="h-full bg-gradient-to-r from-red-100 to-black">
        <form action="{{route('awis.store')}}" method="POST">
            <label for="name">NAME</label>
            <input type="text" id="name" name="name" placeholder="NAME">
            <label for="age">AGE</label>
            <input type="number" id="age" name="age" placeholder="AGE">
            <button type="submit">Done</button>
        </form>
    </div>
    
</body>
</html>