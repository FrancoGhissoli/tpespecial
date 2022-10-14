<?php
/* Smarty version 4.2.1, created on 2022-10-08 21:13:07
  from 'C:\xampp\htdocs\web\tpespecial\templates\formAddGame.tpl.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6341cbc39c1d47_37358625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d050c182b02f605aa4bce7790202f2405b08cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\formAddGame.tpl.',
      1 => 1665256386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6341cbc39c1d47_37358625 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="add" method="POST">
  <input name="titulo" class="form-control form-control-lg" type="text" placeholder=".form-control-lg"
    aria-label=".form-control-lg example">
  <input name="descripcion" class="form-control form-control-lg" type="text" placeholder="Default input"
    aria-label="default input example">
  <input name="anio" class="form-control form-control-lg" type="text" placeholder=".form-control-sm"
    aria-label=".form-control-sm example">
  
    <select class="form-select" aria-label="Default select example">

      <option selected name="genero"></option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
      <option value=<?php echo $_smarty_tpl->tpl_vars['genders']->value->genders;?>
><?php echo $_smarty_tpl->tpl_vars['gender']->value->genders;?>
</option>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
 
  
  <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
