<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-blue-500">
    @can('create sect')
        <a href="{{route('sect.create')}}">Add</a>
        @endcan
    <div class="h-full bg-red-300 m-4">
        
        <table class="w-full">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date</th>
                </tr>
                <tbody>
                    @foreach($sects as $sect)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$sect->name}}</td>
                    <td>{{$sect->date}}</td>
                    </tr>
                   @endforeach
                </tbody>
            </thead>
        </table>
    </div>
    
</body>
</html>