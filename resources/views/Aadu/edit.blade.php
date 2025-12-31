<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('aadu.update',$aadus->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$aadus->name}}" placeholder="NAME">
        <input type="text" name="price" value="{{$aadus->price}}" placeholder="PRICE">
        <button type="submit">done</button>
    </form>
</body>
</html>