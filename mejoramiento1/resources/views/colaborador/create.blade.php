<form action="{{route('colaborador.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
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
   
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>