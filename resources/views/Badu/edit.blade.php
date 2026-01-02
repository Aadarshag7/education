<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('badu.update',$badus->id)}}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" value="{{$badus->name}}" name="name" placeholder="NAME">
        <input type="number" value="{{$badus->price}}" name="price" placeholder="PRICE">
        <input type="file" vlaue="{{$badus->photo}}" name="photo" placeholder="PHOTO">
        <button type="submit" >DONE</button>


    </form>
    
</body>
</html>