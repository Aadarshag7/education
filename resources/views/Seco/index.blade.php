<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-green-500">
    <div class="h-full bg-gradient-to-l from-red-500  to-white">
        @if($secos->count())
        <table class="w-full m-2 ">
            <thead>
                <tr>
                    <th class="text-start">#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
                <tbody >
                    @foreach($secos as $seco)
                 <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="text-center">{{$seco->name}}</td>
                    <td class="text-center">{{$seco->age}}</td>
                    <td class="text-end"><div class="flex justify-center gap-3"><a href="{{route('seco.edit',$seco->id)}}" class="gap-2" >Edit</a><a href="">Delete</a></td>
                    </div>
                 </tr>        
                            @endforeach
            </thead>
        </table>
        @else
        <p>NO</p>
        @endif
    </div>
    
</body>
</html>