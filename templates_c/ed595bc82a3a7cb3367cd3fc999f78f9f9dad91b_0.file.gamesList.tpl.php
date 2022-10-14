<?php
/* Smarty version 4.2.1, created on 2022-10-08 22:38:53
  from 'C:\xampp\htdocs\web\tpespecial\templates\gamesList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6341dfdd5d0033_03833249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed595bc82a3a7cb3367cd3fc999f78f9f9dad91b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\gamesList.tpl',
      1 => 1665261412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6341dfdd5d0033_03833249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Juego</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
    <tbody>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['game']->value->Nombre;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['game']->value->gender;?>
</td>
        <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
' type='button' class='btn btn-danger'>Eliminar</a></td>
        </tr>
      </tr>
    </tbody>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><td>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
