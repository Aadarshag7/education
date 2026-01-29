<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-green-400">
    <div class="h-full bg-[radial-gradient(circle,_grey,_yellow)]">
        @if($fasts->count())
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-start">#</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>Action</th>
                </tr>
                <tbody>
                   @foreach($fasts as $fast) 
               <tr>
                <td>{{$loop->iteration}}</td>
                <td class="text-center">{{$fast->name}}</td>
                <td class="text-center">{{$fast->price}}</td>
                <td class="text-center"><a href="{{route('fast.edit',$fast->id)}}">Edit</a></td>
               </tr>
                </tbody>
                @endforeach
            </thead>
        </table>
        @else
        <p>No</p>
        @endif
    </div>
    
</body>
</html>