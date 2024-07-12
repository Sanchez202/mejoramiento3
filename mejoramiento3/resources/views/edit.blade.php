<h1>Actualizar datos</h1>
<form action="{{route('jugador.update', $jugador)}}"  method="POST">

    @csrf
    @method('put')
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
   
    <button  type="submit">Actualizar datos</button>
   
</form>