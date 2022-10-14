<?php
/* Smarty version 4.2.1, created on 2022-10-12 01:17:32
  from 'C:\xampp\htdocs\web\tpespecial\templates\formEditGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345f98c3f7191_09426230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0920a4ee952cdcb18c4743966d9eae843a29e079' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\formEditGame.tpl',
      1 => 1665530246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6345f98c3f7191_09426230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
            <td><?php echo $_smarty_tpl->tpl_vars['gameedit']->value->Nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['gameedit']->value->Descripcion;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['gameedit']->value->Anio;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['gameedit']->value->gender;?>
</td>


        </tr>
        </tr>
    </tbody>

</table>
<td>


    <form action="edit/<?php echo $_smarty_tpl->tpl_vars['gameedit']->value->id;?>
" method="POST">
        <input name="ntitulo" class="form-control form-control-lg" type="text" placeholder="Titulo del Juego"
            aria-label=".form-control-lg example">
        <input name="ndescripcion" class="form-control form-control-lg" type="text" placeholder="Descripcion"
            aria-label="default input example">
        <input name="nanio" class="form-control form-control-lg" type="text" placeholder="Año de lanzamiento"
            aria-label=".form-control-sm example">
               <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    </form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
