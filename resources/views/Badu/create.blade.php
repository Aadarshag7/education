<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('badu.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="NAME">
        <input type="number" name="price" placeholder="PRICE">
        <input type="file" name="photo[]" multiple>
        <button type="submit" >DONE</button>
    </form>
    
</body>
</html>