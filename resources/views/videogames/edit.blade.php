<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Title</title>
</head>

<body>
    <h3>Editar videojuego {{$videogames->name}}</h3>
    
    <hr>
    <a href="{{ route('videogames.index')}}">Regresar</a>

    {!! Form::model($videogame, ['route' => ['videogames.update', $videogame], 'method' => 'put']) !!}
    {!! Form::label('name', 'Nombre juego:') !!}
    {!! Form::text('name', null) !!}
    <br>
    {!! Form::label('categoria', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null) !!}


    <br>
    {!! Form::submit('Editar') !!}
    {!! Form::close() !!}
</body>

</html>
