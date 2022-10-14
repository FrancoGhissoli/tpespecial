<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:17:51
  from 'C:\xampp\htdocs\web\tpespecial\templates\genderlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349d1ff255911_68355321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c4893f1eb859868ecf324907b5a92002eae9fef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\genderlist.tpl',
      1 => 1665782267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349d1ff255911_68355321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<ul class="list-group">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
    <a href='gamesbycategories/<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_genero;?>
' class="list-group-item list-group-item-action">
      <?php echo $_smarty_tpl->tpl_vars['gender']->value->Nombregenero;?>

    </a>
    <div class="grupo_botones">
      <?php if (!(isset($_SESSION['USER_ID']))) {?>

      <?php } else { ?>
        <a class="boton_generos" href='showeditgenderform/<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_genero;?>
'>Editar</a>
        <a class="boton_generos" href='deletegender/<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_genero;?>
'>Eliminar</a>
      <?php }?>

    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<form action="addgenero" method="POST">
  <input name="nombregenero" class="form-control form-control-lg" type="text" placeholder="Nombre del genero"
    aria-label=".form-control-lg example">
  <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>











<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
