<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Lista de jugadores</h1>

    @foreach ($jugador as $jugador)
    <tr>
        <br>
        <td>{{$jugador->fecha_nacimiento}}</td>
        <td>{{$jugador->codigo}}</td>
        <td>{{$jugador->nombre}}</td>
        <td>{{$jugador->posicion}}</td>
        <td><a href="{{route('jugador.show',$jugador->id)}}">Detalle</a></td> 
        <td><a href="{{route('jugador.edit',$jugador->id)}}">Editar</a></td> 
        <form action="{{route('jugador.destroy',$jugador->id)}}" method="POST"> 
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
        <br>
    </tr>
@endforeach
        <br>
       
       
    </tr>

   
</body>
</html>