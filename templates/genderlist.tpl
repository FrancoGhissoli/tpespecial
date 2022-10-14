{include file="header.tpl"}


<ul class="list-group">
  {foreach from=$genders item=$gender}
    <a href='gamesbycategories/{$gender->id_genero}' class="list-group-item list-group-item-action">
      {$gender->Nombregenero}
    </a>
    <div class="grupo_botones">
      {if !isset($smarty.session.USER_ID)}

      {else}
        <a class="boton_generos" href='showeditgenderform/{$gender->id_genero}'>Editar</a>
        <a class="boton_generos" href='deletegender/{$gender->id_genero}'>Eliminar</a>
      {/if}

    </div>
  {/foreach}
</ul>
<form action="addgenero" method="POST">
  <input name="nombregenero" class="form-control form-control-lg" type="text" placeholder="Nombre del genero"
    aria-label=".form-control-lg example">
  <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>











{include file="footer.tpl"}