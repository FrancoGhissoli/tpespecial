{include file="header.tpl"}

<tr>
    <td>{$genderedit->id_genero}</td>
    <td>{$genderedit->Nombregenero}</td>
</tr>
<form action="gendereditform/{$genderedit->id_genero}" method="POST">
    <input name="gendertitulo" class="form-control form-control-lg" type="text" placeholder="Titulo del Genero"
        aria-label=".form-control-lg example">
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>


{include file="footer.tpl"}