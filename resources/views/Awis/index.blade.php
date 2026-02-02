<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-red-100">
        @if($awis->count())
        <div class="h-full bg-gradient-to-l m-4  from-green-500 to-white">
            <table class="w-full ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Age</th>
                    </tr>
                </thead>
                @foreach($awis as $awi)
                    <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$awi->name}}</td>
                            <td>{{$awi->age}}</td>
                        </tr>

                    </tbody>
                @endforeach
            </table>
        @else
        <p>NO</p>
        @endif

    </div>
    
</body>
</html>