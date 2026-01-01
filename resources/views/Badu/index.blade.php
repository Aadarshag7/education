<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($badus->count())
    @foreach($badus as $badu)
    <div class="">
    <h1>{{$badu->name}} {{$badu->price}} {{$badu->photo}}</h1>
    </div>
    @endforeach
    @else
    <p> NO ITEMS FOUND</p>
    @endif

    
</body>
</html>
