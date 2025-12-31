<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update',$fers->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$fers->title}}" placeholder="Title">
        <input type ="text" name="content" value="{{$fers->content}}" placeholder="Content">
        <button type = "submit" >DOne</button>
    </form>
    
</body>
</html>