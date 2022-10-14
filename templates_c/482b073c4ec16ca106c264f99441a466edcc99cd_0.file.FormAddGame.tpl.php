<?php
/* Smarty version 4.2.1, created on 2022-10-08 22:29:40
  from 'C:\xampp\htdocs\web\tpespecial\templates\FormAddGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6341ddb477d2d4_75109267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '482b073c4ec16ca106c264f99441a466edcc99cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\FormAddGame.tpl',
      1 => 1665260919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6341ddb477d2d4_75109267 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="add" method="POST">
  <input name="titulo" class="form-control form-control-lg" type="text" placeholder=".form-control-lg"
    aria-label=".form-control-lg example">
  <input name="descripcion" class="form-control form-control-lg" type="text" placeholder="Default input"
    aria-label="default input example">
  <input name="anio" class="form-control form-control-lg" type="text" placeholder=".form-control-sm"
    aria-label=".form-control-sm example">
  <select class="form-select" aria-label="Default select example">
    <option type="number" selected name="genero"></option>
    <option value="2">2</option>
  </select>
  <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
