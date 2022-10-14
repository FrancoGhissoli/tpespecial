<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:09:04
  from 'C:\xampp\htdocs\web\tpespecial\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349cff0d77db8_03234170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed0fefda1e29a53c570cd003c72350e4f2cd77ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpespecial\\templates\\header.tpl',
      1 => 1665781718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349cff0d77db8_03234170 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?php echo BASE_URL;?>
">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Games - Todos los juegos</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Juegos PC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="gender">Generos</a>
            </li>
            <li class="nav-item">

              <?php if (!(isset($_SESSION['USER_ID']))) {?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="formlogin">Iniciar Sesion</a>
              </li>
            <?php } else { ?>
              <li class="nav-item ml-auto">
                <a class="nav-link active" aria-current="page" href="logoutuser">Cerrar Sesion</a>
              </li>
            <?php }?>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
<main class="container"><?php }
}
