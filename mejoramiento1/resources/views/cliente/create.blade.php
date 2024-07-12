<form action="{{route('cliente.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
        telefono:
        <br>
        <input type="text" name="telefono">
    </label>
    <br>
    <label>
        mumero social:
        <br>
        <input type="text" name="num_social">
    </label>
   
    <br>
    codigo:
    <br>
    <input type="text" name="codigo">
</label>
   <br>
   domicilio:
   
   <br>
   <input type="text" name="domicilio">
</label>
<br>
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>