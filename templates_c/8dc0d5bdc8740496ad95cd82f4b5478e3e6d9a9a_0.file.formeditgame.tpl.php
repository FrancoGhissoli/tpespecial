<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:09:04
  from 'C:\xampp\htdocs\web\tpespecial\templates\formeditgame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349cff0d3b284_04927324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dc0d5bdc8740496ad95cd82f4b5478e3e6d9a9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\formeditgame.tpl',
      1 => 1665781655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349cff0d3b284_04927324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<th></th>


<ul class="list-group list-group-flush">
  <li class="list-group-item">Nombre del Juego: <?php echo $_smarty_tpl->tpl_vars['gameedit']->value->Nombre;?>
</li>
  <li class="list-group-item">Descripcion: <?php echo $_smarty_tpl->tpl_vars['gameedit']->value->Descripcion;?>
</li>
  <li class="list-group-item">Año de Lanzamiento: <?php echo $_smarty_tpl->tpl_vars['gameedit']->value->Anio;?>
</li>
</ul>
<form action="editform/<?php echo $_smarty_tpl->tpl_vars['gameedit']->value->id;?>
" method="POST">

  <input name="ntitulo" class="form-control form-control-lg" type="text" placeholder="Titulo del Juego"
    aria-label=".form-control-lg example">
  <input name="ndescripcion" class="form-control form-control-lg" type="text" placeholder="Descripcion"
    aria-label="default input example">
  <input name="nanio" class="form-control form-control-lg" type="number" placeholder="Año de lanzamiento"
    aria-label=".form-control-sm example">
  <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
