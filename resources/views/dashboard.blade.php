<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen">
    <div class="h-full m-2 bg-gradient-to-r from-purple-200 to-yellow-300 grid grid-cols-[200px_1fr]">
        <div class="bg-[radial-gradient(circle,_blue,_red)]">
            <img src="admin/images/logo.png" class="w-[100px]">
            <h1 class="text-black p-2 border-4 border-black relative top-3">Welcome to AG page!</h1>
            <a href="{{route('post.index')}}" class="relative top-5 p-1 left-4 border-4 ">Post</a>
        </div>
        <div class="bg-blue-300 h-[100px] relative">
            <h1 class="text-green-500 text-2xl absolute left-[200px]">Dashboard</h1>
        </div>
    </div>

    
</body>
</html>