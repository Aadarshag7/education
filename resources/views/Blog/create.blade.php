<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-blue-300">
    <div class="h-full m-7 bg-blue-500 p-3 ">
        <form action="{{route('blog.store')}}" method="POST" class= " flex justify-center items-center gap-4">
            @csrf
            <label for="name" class="border-4 p-2 rounded-[50%]">NAME</label>
            <input type="text" name="name" id="name" placeholder="NAME">
             <label for="age" class= "border-4 p-2 rounded-[50%]">AGE</label>
            <input type="number" name="age" id="age" placeholder="AGE">
            <button type="submit" class="border-4 p-2 border-black ">SUBMIT</button> 
        </form>

    </div>
    
</body>
</html>