{if !isset($smarty.session.USER_ID)}
         
  {else}
    <form action="add"    method="POST">
  <input name="titulo" required class="form-control" type="text" placeholder="Titulo del Juego"
    aria-label=".form-control-lg example">
  <input name="descripcion" required class="form-control" type="text" placeholder="Descripcion"
    aria-label="default input example">
  <input name="anio" required class="form-control" type="text" placeholder="Año de lanzamiento"
    aria-label=".form-control-sm example">
  <select name="id_genero" required class="form-select" aria-label="Default select example">
    <option selected disabled>Seleccione un genero</option>
    {foreach from=$genders item=$gender}
    <option value={$gender->id_genero}>{$gender->Nombregenero}</option>
    {/foreach}
  </select>
  <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
  {/if}

{include file="footer.tpl"}