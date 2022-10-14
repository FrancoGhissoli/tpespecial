{include file="header.tpl"}

<table class="table">
  <thead>
    <tr>
      <th scope="col">Juego</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Año de lanzamiento</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{$games->Nombre}</td>
      <td>{$games->Descripcion}</td>
      <td>{$games->Anio}</td>
      <td>{$games->gender}</td>
    </tr>
    </tr>
</tbody>