<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/siu">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text"name="email" placeholder="email">
        <button type="submit">do</button>
    </form>
    @if($errors->any())
    <p style=color:red> {{$errors->first()}}</p>
    @endif
</body>
</html>
