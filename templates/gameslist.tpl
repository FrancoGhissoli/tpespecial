{include file="header.tpl"}


 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Juego</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  {foreach from=$games item=$game}
    <tbody>
      <tr>
        <td>{$game->Nombre}</td>
        <td>{$game->gender}</td>

        {if !isset($smarty.session.USER_ID)}
         
        {else}
          <td><a href='delete/{$game->id}' type='button' class='btn btn-danger'>Eliminar</a></td>
          <td><a href='showeditform/{$game->id}' type='button' class='btn btn-warning'>Editar</a></td>
        {/if}
        <td><a href='detailgame/{$game->id}' type='button' class="btn btn-info">Mas Información</a></td>

      </tr>
      </tr>
    </tbody>
  {/foreach}
</table>
<td>