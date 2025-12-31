<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('aadu.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="number" name="price" placeholder="Price">
    <button type="submit">Done</button>
</form>
    
</body>
</html>