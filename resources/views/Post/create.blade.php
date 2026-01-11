<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <inuput type="text" name="title" id="title" placeholder="TITLE">
        <input type="text" name="content" id="content" placehoder="CONTENT">
        <button type="submit">DONE</button>
    </form>
</body>
</html>