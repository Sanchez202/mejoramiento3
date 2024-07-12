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

    <h1>Lista de colaborador</h1>

    @foreach ($colaborador as $colaborador)
    <tr>
        <br>
        <td>{{$colaborador->nif}}</td>
        <td>{{$colaborador->nombre}}</td>
       
        <td><a href="{{route('colaborador.show',$colaborador->id)}}">Detalle</a></td> 
        <td><a href="{{route('colaborador.edit',$colaborador->id)}}">Editar</a></td> 
        <form action="{{route('colaborador.destroy',$colaborador->id)}}" method="POST"> 
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