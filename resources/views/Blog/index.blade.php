<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen  bg-red-500 ">
    @can('create blog')
        <a href="{{route('blog.create')}}">Add</a>
        @endcan
        
    @if($blogs->count())
    
    <div class="h-full bg-blue-100 ">
        <table class="w-full border-collapse p-[200px] 
        border-4 border-black">
            <thead class="">
                <tr>
                    <th >#</th>
                    <th>NAME</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td class="text-center">{{$blog->name}}</td>
                    <td class="text-center">{{$blog->age}}</td>
                </tr>
    @endforeach
            </tbody>
        </table>
    </div>

    @else
    <p>NO ITEMS</p>
    @endif
    
</body>
</html>