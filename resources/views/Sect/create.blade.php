<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="h-screen bg-red-500">
    <div class="h-full bg-red-300 m-4">
        <form action="{{route('sect.store')}}" method="POST">
            @csrf 
            <label for="name">NAME</label>
            <input type="text" name="name" id="name" placeholder="NAME">
            <label for="date">DATE</label>
            <input type="date" name="date" id="date" placeholder="DATE">
            <button type="submit">DONE</button>

            

        </form>
    </div>
    
</body>
</html>