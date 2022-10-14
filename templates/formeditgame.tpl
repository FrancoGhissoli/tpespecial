{include file="header.tpl"}

<th></th>


<ul class="list-group list-group-flush">
  <li class="list-group-item">Nombre del Juego: {$gameedit->Nombre}</li>
  <li class="list-group-item">Descripcion: {$gameedit->Descripcion}</li>
  <li class="list-group-item">Año de Lanzamiento: {$gameedit->Anio}</li>
</ul>
<form action="editform/{$gameedit->id}" method="POST">

  <input name="ntitulo" class="form-control form-control-lg" type="text" placeholder="Titulo del Juego"
    aria-label=".form-control-lg example">
  <input name="ndescripcion" class="form-control form-control-lg" type="text" placeholder="Descripcion"
    aria-label="default input example">
  <input name="nanio" class="form-control form-control-lg" type="number" placeholder="Año de lanzamiento"
    aria-label=".form-control-sm example">
  <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>


{include file="footer.tpl"}