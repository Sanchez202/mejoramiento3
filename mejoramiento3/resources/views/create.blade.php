<form action="{{route('jugador.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
        fecha_nacimiento:
        <br>
        <input type="text" name="fecha_nacimiento">
    </label>
    <br>
    <label>
        codigo:
        <br>
        <input type="text" name="codigo">
    </label>
   
    <br>
    nombre:
    <br>
    <input type="text" name="nombre">
</label>
   <br>
   posicion:
   
   <br>
   <input type="text" name="posicion">
</label>
<br>
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>