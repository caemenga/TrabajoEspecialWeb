<?php
require_once './app/controllers/admin.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$adminController = new AdminController();



// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $adminController->showProductList();
        break;
    case 'delete':
        $adminController->delteItem($params[1]);
        break;
    case 'show-edit-form':
        $adminController -> showEditForm($params[1]);
        break;
    case 'edit':
        $adminController -> editProduct($params[1]);
    case 'add':
        $adminController -> addProduct();
        break;
    case 'beer':
        $adminController->showBeers();    
    default:
        echo('404 Page not found');
        break;
}

