<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-red-500">
    <div class="h-full m-5 p-2 bg-[radial-gradient(circle,_blue,_white)]">
        <form action="{{route('fast.store')}}" method="POST">
            @csrf 
            <label for="name">NAME</label>
            <input type="text" name="name" id="name" placeholder="NAME">
            <label for="price">PRICE</label>
            <input type="number" name="price" id="price" placeholder="PRICE">
            <button type="submit">DONE</button>
        </form>
    </div>
</body>
</html>