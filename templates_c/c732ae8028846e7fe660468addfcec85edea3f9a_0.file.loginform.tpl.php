<?php
/* Smarty version 4.2.1, created on 2022-10-14 02:30:50
  from 'C:\xampp\htdocs\web\tpespecial\templates\loginform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348adba11a634_29839654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c732ae8028846e7fe660468addfcec85edea3f9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\loginform.tpl',
      1 => 1665707444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348adba11a634_29839654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <form action="validateuser" method="POST" >
        <div class="form-group">
            <label for="correo">Correo Electronico</label>
            <input type="email" required class="form-control" id="email" name="correo" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña</label>
            <input type="password" required class="form-control" id="password" name="contraseña">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
