<?php
/* Smarty version 4.2.1, created on 2022-10-14 17:28:32
  from 'C:\xampp\htdocs\web2\TPE2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63498020c3dcb4_97633146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37956e9b7d8152fa38e2eeaf94134be860347dc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE2\\templates\\header.tpl',
      1 => 1665759893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63498020c3dcb4_97633146 (Smarty_Internal_Template $_smarty_tpl) {
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
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Amalaya</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                  </li>
                 
                 
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      Bebidas
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="show-product/cerveza">Cervezas</a></li>
                      <li><a class="dropdown-item" href="show-product/vino">Vinos</a></li>
                      <li><a class="dropdown-item" href="show-product/tequila">Tequilas</a></li>
                      <li><hr class="dropdown-divider"></li>
                      //solo el admin puede ver especificaciones
                      <li><a class="dropdown-item" href="show-specifications">Especificaciones</a></li>
                      
                      
                    </ul>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Log in</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main class="container">

<?php }
}
