<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-blue-300  flex justify-end h-screen">
    <form action="{{route('login')}}" method="POST">
        @csrf 
        <label for="email">Email</label>
        <input type="email" class="box-border w-[300px]" id="email" name="email" placeholder="EMAIL" autocomplete="off">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="password" autocomplete="new-password">
        <button type="submit" class="border-4 border-black rounded-l-[50%]"->submit</button>


    </form>
    </div>
    
</body>
</html>