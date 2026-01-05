<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('badu.create')}}">ADD</a>
    @if($badus->count())
    @foreach($badus as $badu)
    
    <div class="">
    <h1>{{$badu->name}} {{$badu->price}} </h1>
    @foreach($badu->photos as $photo)
    <img src="{{asset('storage/'.$photo->path)}}">
    @endforeach

    <a href="{{route('badu.edit',$badu->id)}}" >EDIT</a>
    <form action="{{route('badu.destroy',$badu->id)}}" method="POST">
        @csrf 
        @method('DELETE')
         <button type="submit">DEL</button>
    </form>
   
    </div>
    @endforeach
    @else
    <p> NO ITEMS FOUND</p>
    @endif

    
</body>
</html>
