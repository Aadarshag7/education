<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-green-400"> 
    <div class="h-full bg-gradient-to-r shadow-xl  shadow-red-500 from-red-300 to-white m-5">
        @if($dacts->count())
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-start">#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
                <tbody>
                    @foreach($dacts as $dect)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="text-center">{{$dect->name}}</td>
                        <td class="text-center">{{$dect->price}}</td>
                        <td class="text-center" ><a href="{{route('dect.edit',$dect->id)}}">Edit</a> </td>
                    </tr>
                </tbody>
                @endforeach
                @else
                <p>NO</p>
            
                @endif
            
        </table>
    </div>
    
</body>
</html>