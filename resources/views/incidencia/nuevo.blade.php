<h3>{{ $mensaje }}</h3>
<form method="POST" action="/incidencias" enctype="multipart/form-data">
    @csrf

    <label for="latitud">Latitud</label>
    <input name="latitud" id="latitud" type="text">

    <label for="longitud">Longitud</label>
    <input name="longitud" id="longitud" type="text">

    <label for="ciudad">Ciudad</label>
    <input name="ciudad" id="ciudad" type="text">

    <label for="direccion">Dirección</label>
    <input name="direccion" id="direccion" type="text">

    <label for="etiqueta">Etiqueta</label>
    <input name="etiqueta" id="etiqueta" type="text">

    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" id="descripcion" ></textarea>

    <label for="estado">Estado</label>
    <input name="estado" id="estado" type="text">

    <label for="foto">Foto</label>
    <input name="foto" id="foto" type="file">


    <input type="submit" value="Crear">
</form>