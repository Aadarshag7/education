<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-black">
    <div class="flex flex-col h-full m-4 bg-[radial-gradient(circle,_red,_white)]">
    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <label for="title">TITLE</label>
         <input type="text" name="title" id="title" placeholder="TITLE" class="box-border w-[1000px]">
         <label for="content" >CONTENT</label>
        <input type="text" name="content" id="content" placeholder="CONTENT" class="box-border w-[1200px]">
        <button type="submit" class="border-4 border-black">DONE</button>
    </form>
    </div>
</body>
</html>