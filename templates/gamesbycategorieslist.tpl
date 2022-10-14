{include file="header.tpl"}
<table class="table">
  <thead>
    <tr>
      <th scope="col">Juego</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Año de lanzamiento</th>
    </tr>
  </thead>
  {foreach from=$gamesBy item=$gameBy}
    <tbody>
      <tr>
        <td>{$gameBy->Nombre}</td>
        <td>{$gameBy->Descripcion}</td>
        <td>{$gameBy->Anio}</td>
      </tr>
      </tr>
    </tbody>
  {/foreach}
</table>
<td>