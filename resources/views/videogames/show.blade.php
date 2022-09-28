<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Title</title>
</head>

<body>
    <h3>Detalle del videojuego {{$videogame->name}}</h3>
    
    <hr>
    <a href="{{ route('videogames.index')}}">Regresar</a>

    {!! Form::model($videogame) !!}

    {!! Form::label('name', 'Nombre juego:') !!}
    {!! Form::text('name', null , ['readonly']) !!}
    <br>
    {!! Form::label('category_id', 'Categoría:') !!}
    @foreach ($categories as $category)
    {!! Form::text('category_id', $category->name, ['readonly']) !!}
    @endforeach
    <br>
    {!! Form::close() !!}
</body>

</html>
