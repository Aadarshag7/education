<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-white">
    <div class="h-full shadow-xl shadow-black bg-green-200 m-4">
        @if($sotas->count())
        <table class="w-full">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sotas as $sota)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$sota->name}}</td>
                <td>{{$sota->age}}</td>
                </tr>
            </tbody>
        </table>
        @endforeach
        @else
        <p>No</p>
        @endif
    </div>
    
</body>
</html>