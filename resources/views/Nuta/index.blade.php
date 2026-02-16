<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-white">
    <div class="h-full bg-gradient-to-r from-red-200 to-green-300 m-4 p-2 shadow-xl shadow-black">
        @if($nutas->count())
        <table class>
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
            </thead>
            <tbody>
                @foreach($nutas as $nuta)
                <tr>
                 <td>{{$loop->iteration}}</td>
                 <td>{{$nuta->name}}</td>
                 <td>{{$nuta->age}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <p>No</p>
        @endif
    </div>
    
</body>
</html>