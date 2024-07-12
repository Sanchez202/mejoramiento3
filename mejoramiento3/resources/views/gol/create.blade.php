<form action="{{route('gol.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   <h1>lista de goles</h1>
    <label>
        minuto:
        <br>
        <input type="text" name="minuto">
    </label>
    <br>
    <label>
        descuento:
        <br>
        <input type="text" name="descuento">
    </label>
   
    <br>
    codigo:
    <br>
    <input type="text" name="codigo">
</label>
   <br>
  
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>