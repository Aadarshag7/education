<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen">
    @can('create game')
    <a href="{{route('game.create')}}">ADD</a>
    @endcan
    @if($games->count())
    
    <div class="h-full bg-[radial-gradient(ellipse,grey,blue)]">
    <table class="w-full">
        <thead>
            <tr>
                <th class="text-start">SN</th>
                <th>Name</th>
                <th>Price</th>
                <th class="text-start">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($games as $game)
                <td>{{$loop->iteration}}</td>
                <td class="text-center text-white">{{$game->name}}</td>|
                <td class="text-center text-white">{{$game->price}}</td>
                <td><a href="{{route('game.edit',$game->id)}}" class="border-2 border-black p-1">EDIT</a></td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    </div>
    @else
    <p>NO NO NO</p>
    @endif

    
</body>
</html>