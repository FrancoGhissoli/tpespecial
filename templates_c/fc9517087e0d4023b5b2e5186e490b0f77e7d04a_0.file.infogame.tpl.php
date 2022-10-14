<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:28:13
  from 'C:\xampp\htdocs\web\tpespecial\templates\infogame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349d46d08c738_13787853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc9517087e0d4023b5b2e5186e490b0f77e7d04a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\infogame.tpl',
      1 => 1665781724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6349d46d08c738_13787853 (Smarty_Internal_Template $_smarty_tpl) {
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
      <td><?php echo $_smarty_tpl->tpl_vars['games']->value->Nombre;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['games']->value->Descripcion;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['games']->value->Anio;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['games']->value->gender;?>
</td>
    </tr>
    </tr>
</tbody><?php }
}
