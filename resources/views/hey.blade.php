<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-[3000px]">
    <div class="h-20 ml-2 bg-black ">
        <div class= "h-6 text-red-500 pt-0.5  bg-green-300">THis</div>
        <div class=" h-3 m-2 bg-red-400"></div>
        <button class="bg-red-400  w-full text-xl">click</button>
    </div>
    <div class="flex gap-2 justify-end items-center h-[200px] bg-gray-500 " >
        <div class="w-7 h-7 bg-red-500"></div>
        <div class="w-8 h-8 bg-green-400"></div>
        <button class="bg-yellow-400  ">enter</button>
    </div>
    <div class="grid grid-cols-[100px_1fr_2fr] h-[300px] bg-yellow-200">
            <div class= "col-start-2 bg-black "></div>
            <div class="col-start-2 bg-blue-400  "></div>
            <div class="col-start-3 bg-green-500 "></div>
        </div>
    <div class= "grid grid-rows-[100px_1fr_2fr] h-[300px]  bg-red-400">
        <div class=" row-start-1 row-end-3 bg-black"></div>
        <div class=" row-start-1 bg-white"></div>
        <div class="bg-brown"></div>
    </div>
   <div class="bg-gradient-to-tr from-red-500 to-green-200 h-[200px]"></div>
   <div class="bg-[radial-gradient(circle,_blue,_red)] h-[200px]"></div> 
   <div class="bg-[conic-gradient(red_0deg,_red_120deg,_green_120deg,_green_180deg,blue_180deg,_blue_360deg)] h-[300px] border-9 border-dotted rounded-[50%] "></div>
   <div class="bg-white m-4 shadow-sm shadow-red-500 h-[300px]"></div>
   <div class="bg-pink-400 h-[500px]">
    <div class="bg-black w-[200px] h-[100px] transition-colors transition-transform duration-150 ease-in 
    hover:translate-y-[30px] hover:bg-yellow-500"></div>
   </div>
   <div class="bg-pink-400 h-[100px] w-[200px] animate-fadeIn"></div>
   <div class="bg-green-300 h-[200px] relative">
    <div class="bg-red-500 w-[100px] h-[100px] relative top-2" ></div>
   </div>
   <div class="bg-white h-[500px] ">
    <img src="admin/images/logo.png" alt="MY LOGO" class= "w-100  rounded-full object-cover ">
    <img src="admin/images/specials-3.png" alt= "my photo" class="w-100 h-50 border-1 relative left-2">

   </div>
   <div class ="h-[400px] bg-black grid grid-cols-[200px_1fr_2fr]">
   <div class="bg-red-300 h-[300px] w-500 grid grid-cols-subgrid col-start-1 col-end-4">
   <div class="bg-yellow-200 col-start-1 col-end-2"></div>
   <div class="bg-green-200 col-start-2 col-end-3"></div>
   <div class="bg-blue-400 col-start-3 col-end-4"></div>
   </div>
   </div>
   <div class="h-[200px] bg-white flex flex-col gap-2">
    <input type = "text" name="name" placeholder="name" class="placeholder border-4 border-red-300 border-solid box-border w-[100px] px-5">
    <input type="text" placeholder="email" autocomplete="OFF" class="placeholder border-4 border-red-300 ">
    <input type="password" placeholder="password" autocomplete="new-password" class="placeholder border-4 border-red-300">
   </div>

   
   
</body>
</html>