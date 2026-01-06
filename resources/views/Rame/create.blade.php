<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('rame.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">name</label>
        <input type="text" id="name" name="name" placeholder="NAME">
        <label for="number">price</label>
        <input type="number" id="number" name="price" placehoder="NUM">
        <label for="photo">Photo</label>
        <input type="file" id="photo" name="photo[]" multiple> 
        <button type="submit">DONE</button>
    </form>
</body>
</html>