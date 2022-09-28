<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Title</title>
</head>

<body>
    <h3>Aquí podrás crear tus videojuegos</h3>
    <hr>
    <a href="{{ route('videogames.index')}}">Regresar</a>

    {!! Form::open(['route' => 'videogames.store']) !!}

    {!! Form::label('name', 'Nombre juego:') !!}
    {!! Form::text('name', null , ['placeholder'=> 'digita el nombre']) !!}
    <br>
    @error('name')
        <strong style="color: brown">{{ $message}}</strong>
    @enderror
    <br>
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null) !!}
    <br>
    @error('category_id')
        <strong style="color: brown">{{ $message}}</strong>
    @enderror
    <br>
    {!! Form::submit('Crear') !!}

    {!! Form::close() !!}
</body>

</html>
