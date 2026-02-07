<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($boras->count())
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
             @foreach($boras as $bora)
            <tbody>
                
             <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$bora->name}}</td>
                <td>{{$bora->price}}</td>
                
             </tr>
            </tbody>
            @endforeach
           
        </thead>
    </table>
     @else
   <p>no</p>
   @endif
</body>
</html>