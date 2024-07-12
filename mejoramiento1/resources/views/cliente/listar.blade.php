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

    <h1>Lista de clientes</h1>

    @foreach ($cliente as $cliente)
    <tr>
        <br>
        <td>{{$cliente->telefono}}</td>
        <td>{{$cliente->num_social}}</td>
        <td>{{$cliente->codigo}}</td>
        <td>{{$cliente->domicilio}}</td>
        <td><a href="{{route('cliente.show',$cliente->id)}}">Detalle</a></td> 
        <td><a href="{{route('cliente.edit',$cliente->id)}}">Editar</a></td> 
        <form action="{{route('cliente.destroy',$cliente->id)}}" method="POST"> 
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