<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Title</title>
</head>

<body>
    <h3>Bienvenido a tu aplicación de juegos</h3>
    <hr>
    @if (session('info'))
            <div role="alert">
                <span>Atención! </span> {{session('info')}}
            </div>
        @else
            
        @endif


    <a href="{{ route('videogames.create')}}">Crear nuevo juego</a>
    <h5>Juegos actuales</h5>

    <table>
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Cateoría</th>
            <th>Creado</th>
            <th>Estado</th>
            <th colspan="4">Acciones</th>
        </thead>
        <tbody>
            @forelse ($videogames as $videogame)
        <tr>
            <td>{{$videogame->id}}</td>
            <td>{{$videogame->name}}</td>
            <td>
                @foreach ($categories as $category)
                @if ($videogame->category_id == $category->id)
                {{$category->name}}  
                @endif

                
                @endforeach
            </td>
            <td>{{$videogame->created_at}}</td>
            <td>{{$videogame->active}}</td>
            <td>
                <a href="{{ route('videogames.show', $videogame)}}">Ver</a>
            </td>
            <td>
                <a href="{{ route('videogames.edit', $videogame)}}">Editar</a>
            </td>
            <td>
                {!! Form::open(['route' => ['videogames.destroy', $videogame], 'method'=> 'delete']) !!}
                                    <input type="submit" value="Eliminar">
                                    {!! Form::close() !!}

            </td>
        </tr>
        @empty
            <h2>No hay datos que mostrar</h2>
        @endforelse
        </tbody>
    </table>

    <ul>
        
        
       
    </ul>
</body>

</html>
