<?php
/* Smarty version 4.2.1, created on 2022-10-14 19:00:20
  from 'C:\xampp\htdocs\web2\TPE2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634995a4312841_99269333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37956e9b7d8152fa38e2eeaf94134be860347dc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE2\\templates\\header.tpl',
      1 => 1665766818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634995a4312841_99269333 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Bebidas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="show-product/cerveza">Cervezas</a>
            <a class="dropdown-item" href="show-product/vino">Vinos</a>
            <a class="dropdown-item" href="show-product/tequila">tequila</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="show-specifications">Especificaciones</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
    </header>
    <main class="container">

<?php }
}
