<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@if($rames->count())
    @foreach($rames as $rame)

        <h1>{{ $rame->name }} {{ $rame->price }}</h1>

        @if($rame->images->count())
            @foreach($rame->images as $image)
                <img src="{{ asset('storage/' . $image->path) }}" width="150">
            @endforeach
        @endif

    @endforeach
@else
    <p>No items found</p>
@endif

</body>
</html>
