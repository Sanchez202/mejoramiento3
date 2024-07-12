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

    <h1>Lista de goles</h1>

    @foreach ($gol as $gol)
    <tr>
        <br>
        <td>{{$gol->minuto}}</td>
        <td>{{$gol->descuento}}</td>
        <td>{{$gol->codigo}}</td>
        <td><a href="{{route('gol.show',$gol->id)}}">Detalle</a></td> 
        <td><a href="{{route('gol.edit',$gol->id)}}">Editar</a></td> 
        <form action="{{route('gol.destroy',$gol->id)}}" method="POST"> 
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