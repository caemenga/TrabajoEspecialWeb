<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
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
    <a class="navbar-brand" href="home">Amalaya</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home">Home</a>
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
        
        
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="log-in-form">Login</a>
          </li>
         
          <li class="nav-item ml-auto">
            <a class="nav-link" aria-current="page" href="logout">Logout </a>
          </li>
         
      </ul>
    </div>
  </nav>
 </header>
    <main class="container">

