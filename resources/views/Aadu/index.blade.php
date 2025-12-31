<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('aadu.create')}}">Add</a>
    @if($aadus->count())
    @foreach($aadus as $aadu)
    <div class="">
        <h1>{{$aadu->name}} {{$aadu->price}}</h1>
        <a href="{{route('aadu.edit',$aadu->id)}}">Edit</a>
        
    </div>
    @endforeach
    @else
    <p>NO ITEMS FOUND</p>
    @endif
    
</body>
</html>