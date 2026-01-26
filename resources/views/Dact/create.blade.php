<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-blue-500">
    <div class="h-full bg-blue-300 p-4 m-5">
        <form action="{{route('dect.store')}}" method="POST">
            @csrf 
            <label for="name" class="border-4 border-blue-500">NAME</label>
            <input type="text" name="name" id="name" placeholder="NAME">
            <label for="price" class="border-4 border-blue-500">PRICE</label>
            <input type="number" name="price" id="price" placeholder="PRICE">
            <button type="submit" class="border-4 border-blue-500 p-1">Done</button>
        </form>
    </div>
</body>
</html>