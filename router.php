<?php
require_once './app/controllers/vinoteca.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$vinotecaController = new VinotecaController();


// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $vinotecaController->showProductList();
        break;
    default:
        echo('404 Page not found');
        break;
}

