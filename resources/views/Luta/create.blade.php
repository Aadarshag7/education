<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-white">
    <div class="h-full bg-red-200 m-4 shadow-xl p-4 shadow-black">
        <form action="{{route('luta.store')}}" class="w-full flex gap-6" method="POST">
            @csrf 
         <label for="name">NAME</label>
         <input type="text" id="name" name="name" placeholder="NAME" class="box-border w-[300px]">
         @error('name')
         <div class="text-red relative top-[50px] right-[200px]">{{$message}}</div>
         @enderror
         <input type="number" name="age" placeholder="AGE">
         <button type="submit">DONE</button>
        </form>
    </div>
    
</body>
</html>