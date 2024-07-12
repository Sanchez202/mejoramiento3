<h1>Actualizar datos</h1>
<form action="{{route('gol.update', $gol)}}"  method="POST">

    @csrf
    @method('put')

    <h1>actualiza gol</h1>
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
   
    <button  type="submit">Actualizar datos</button>
   
</form>