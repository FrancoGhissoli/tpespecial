<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:09:12
  from 'C:\xampp\htdocs\web\tpespecial\templates\gamesbycategorieslist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349cff822a079_42289541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f108c1be9803e1aaf115233a9aa70dc42187d2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\gamesbycategorieslist.tpl',
      1 => 1665781685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6349cff822a079_42289541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Juego</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Año de lanzamiento</th>
    </tr>
  </thead>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gamesBy']->value, 'gameBy');
$_smarty_tpl->tpl_vars['gameBy']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gameBy']->value) {
$_smarty_tpl->tpl_vars['gameBy']->do_else = false;
?>
    <tbody>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['gameBy']->value->Nombre;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['gameBy']->value->Descripcion;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['gameBy']->value->Anio;?>
</td>
      </tr>
      </tr>
    </tbody>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<td><?php }
}
