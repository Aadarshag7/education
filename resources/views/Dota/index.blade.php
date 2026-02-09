<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-green-300">
    <div class="h-full m-2 bg-gradient-to-r from-red-300 to-blue-400">
        @if($dotas->count())
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-start">#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    @foreach($dotas as $dota)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="text-center">{{$dota->name}}</td>
                    <td class="text-center">{{$dota->price}}</td>
                    <td class="text-center"><div class="flex justify-center gap-2">
                        <a href="{{route('dota.edit',$dota->id)}}" class="border-4 border-black p-1 bg-white">Edit</a>
                        <form action="{{route('dota.delete',$dota->id)}}" method="POST">
                            @csrf
                            @method('DELETE') 
                            <button type="submit" class="border-4 bg-white border-black p-1">Delete</button>
                        </form>
                        </div>
                    </td>
                    </tr>

                </tbody>
            </thead>
        </table>
        @endforeach
        @else
        <p>NO</p>
        @endif
    </div>
    
</body>
</html>