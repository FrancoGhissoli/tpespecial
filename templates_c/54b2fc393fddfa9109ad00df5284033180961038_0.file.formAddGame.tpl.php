<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:41:23
  from 'C:\xampp\htdocs\web\tpespecial\templates\formAddGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349d783594931_20557587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54b2fc393fddfa9109ad00df5284033180961038' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\formAddGame.tpl',
      1 => 1665783681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349d783594931_20557587 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_SESSION['USER_ID']))) {?>
         
  <?php } else { ?>
    <form action="add"    method="POST">
  <input name="titulo" required class="form-control" type="text" placeholder="Titulo del Juego"
    aria-label=".form-control-lg example">
  <input name="descripcion" required class="form-control" type="text" placeholder="Descripcion"
    aria-label="default input example">
  <input name="anio" required class="form-control" type="text" placeholder="Año de lanzamiento"
    aria-label=".form-control-sm example">
  <select name="id_genero" required class="form-select" aria-label="Default select example">
    <option selected disabled>Seleccione un genero</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
    <option value=<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_genero;?>
><?php echo $_smarty_tpl->tpl_vars['gender']->value->Nombregenero;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </select>
  <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
  <?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
