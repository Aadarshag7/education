<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-black"> 
    <div class="h-full m-4 grid grid-rows-[100px_1fr]">
        <div class=" flex justify-center items-end  bg-gradient-to-r from-white to-black">
            <h1 class=  " p-2 text-4xl border-4 border-black text-black">Welcome to Registration!</h1>
            
        </div>

        <div class="bg-[radial-gradient(ellipse,_blue,_red)] p-3">
            <form action="{{route('register')}}"  class="" method="POST">
                @csrf
                <label for="name" class="border-2 border-black p-2 ">NAME</label>
                <input type="text" id="name" name="name" placeholder="NAME">
                <label for="email" class="border-2 border-black p-2" >EMAIL</label>
                <input type="email" id="email" name="email" placeholder="EMAIL" autocomplete="OFF">
                <label for="password" class="border-2 border-black p-2">PASSWORD</label>
                <input type="password" id="password" name="password"  placeholder="PASSWORD" autocomplete="new-password">
                <label for="password" class="border-2 p-2  border-black">Confirm Pw </label>
                <input type="password" id="password" name="password_confirmation"  placeholder="PASSWORD">
                <button type="submit" class="border-4 border-black  p-8 relative top-[170px] right-[500px]">REGISTER</button>
            </form>
            
        </div>
        
    </div>
    
</body>
</html>