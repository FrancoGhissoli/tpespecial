<?php
/* Smarty version 4.2.1, created on 2022-10-06 07:26:12
  from 'C:\xampp\htdocs\web\tpespecial\templates\detaillist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633e66f42936c2_55995116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '045155c0edf8420cae0222e0ef2cfe59ae3467d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\detaillist.tpl',
      1 => 1665033968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:gameslist.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633e66f42936c2_55995116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:gameslist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
<h1><?php echo $_smarty_tpl->tpl_vars['game']->value->Nombre;?>
</h1>
<h1><?php echo $_smarty_tpl->tpl_vars['game']->value->Descripcion;?>
</h1>
<h1><?php echo $_smarty_tpl->tpl_vars['game']->value->Anio;?>
</h1>
<h1><?php echo $_smarty_tpl->tpl_vars['game']->value->gender;?>
</h1>
<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
