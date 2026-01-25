<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-black">
    <div class="h-full bg-white m-7">
        @if($hects->count())
        <table class="w-full">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    @foreach($hects as $hect)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$hect->name}}</td>
                        <td>{{$hect->age}}</td>
                        <td><a href="{{route('hect.edit',$hect->id)}}">Edit</a></td>
                    </tr>
                 @endforeach
                 @else
                 <p>NO</p>
                 @endif
                </tbody>
            </thead>
    </table>
    </div>
    
</body>
</html>