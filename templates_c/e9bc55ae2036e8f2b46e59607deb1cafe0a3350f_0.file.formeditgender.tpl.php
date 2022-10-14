<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:19:14
  from 'C:\xampp\htdocs\web\tpespecial\templates\formeditgender.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634864b271e709_12191918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9bc55ae2036e8f2b46e59607deb1cafe0a3350f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\formeditgender.tpl',
      1 => 1665688750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634864b271e709_12191918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<tr>
<td><?php echo $_smarty_tpl->tpl_vars['genderedit']->value->id_genero;?>
</td>    
<td><?php echo $_smarty_tpl->tpl_vars['genderedit']->value->Nombregenero;?>
</td>

</tr>
<form action="gendereditform/<?php echo $_smarty_tpl->tpl_vars['genderedit']->value->id_genero;?>
" method="POST">

    <input name="gendertitulo" class="form-control form-control-lg" type="text" placeholder="Titulo del Genero"
        aria-label=".form-control-lg example">

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
