<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-red-200">
<div class="h-full bg-blue-200">
    <form action="{{}}" method="POST">
        @method('PUT')
        @csrf 
        <label for="name">name</label>
        <input type="text" name="name" id="name" value="{{$sect->name}}" placeholder="NAME">
        <label for="date">Date</label>
        <input type="text" name="date" id="date" vlaue="{{$sect->date}}" placeholder="DATE">
        <button type="submit">DONE</button>
    </form>
</div>

    
</body>
</html>