<h1>Actualizar colaborador</h1>
<form action="{{route('colaborador.update', $colaborador)}}"  method="POST">

    @csrf
    @method('put')
    <label>
        nif:
        <br>
        <input type="text" name="nif">
    </label>
    <br>
    <label>
         nombre:
        <br>
        <input type="text" name="nombre">
    </label>
   
    <br>
   
 
    <button  type="submit">Actualizar datos</button>
   
</form>