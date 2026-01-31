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
        <div class="bg-[radial-gradient(circle,_blue,_red)] p-1">

            <img src="admin/images/logo.png" class="w-[100px]">
            <h1 class="text-black p-2 border-4 border-black relative top-3">Welcome to AG page!</h1>
            <a href="{{route('post.index')}}" class="relative top-6 p-1 left-4 border-4 ">Post</a>
            <a href="{{route('blog.index')}}" class="relative top-[70px] right-9 border-4 p-1">Blog</a>
            <a href="{{route('game.index')}}" class="relative top-[114px] right-[87px] p-1 border-4 ">Game</a>
            <a href="{{route('sect.index')}}" class="relative top-[132px]  border-4 left-[19px] p-1 
             border-white  border-black">Sect</a>
             <a href="{{route('hect.index')}}" class="relative top-[171px] right-[30px] border-4 p-1">Hect</a>
             <a href="{{route('dect.index')}}" class="relative top-[216px] right-[82px] border-4 p-1">Dact</a>
             <a href="{{route('fast.index')}}" class="relative top-[260px] right-[129px] border-4 border-white p-1  ">Fast</a>
             <a href="{{route('seco.index')}}" class="relative top-[240px] right-[25px] border-4 p-1">Seco</a>
        </div>
        <div class="bg-blue-300 h-[100px] relative">
            <h1 class="text-green-500 text-2xl absolute left-[200px]">Dashboard</h1>
            <form action="{{route('logout')}}" method="POST" class="text-2xl border-4 border-black p-2 text-green absolute left-[1489px]">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>

    
</body>
</html>