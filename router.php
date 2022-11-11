<?php
require_once './app/controllers/admin.controller.php';
require_once './app/controllers/freeUser.controller.php';


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
        $freeUserController = new FreeUserController();
        $freeUserController->showProductList();
        break;
    case 'log-in-form':
        $adminController = new AdminController();
        $adminController->ShowLoginForm();
        break;
    case 'validate':
        $adminController = new AdminController();
        $adminController->validateUser();
        break;
    case 'seeProduct':
        $freeUserController = new FreeUserController();
        $freeUserController->showProductById($params[1]);
        break;        
    case 'delete':
        $adminController = new AdminController();
        $adminController->delteItem($params[1]);
        break;
    case 'show-edit-form':
        $adminController = new AdminController();
        $adminController -> showEditForm($params[1]);
        break;
    case 'edit':
        $adminController = new AdminController();
        $adminController -> editProduct($params[1]);
        break;
    case 'show-edit-specifications':
        $adminController = new AdminController();
        $adminController -> showEditFormSpecifications($params[1]);
        break;
    case 'edit-specification':
        $adminController = new AdminController();
        $adminController -> editSpecification($params[1]);
        break;
    case 'add-specification':
        $adminController = new AdminController();
        $adminController-> insertSpecification();
        
        break;        
    case 'delete-specifications':
        $adminController = new AdminController();
        $adminController -> deleteSpecification($params[1]);
        break;
    case 'add':
        $adminController = new AdminController();
        $adminController -> addProduct();
        break;
    case 'filter':
        $freeUserController = new FreeUserController();
        $freeUserController -> filterBySpecification();
        break;
    case 'show-product':
        $freeUserController = new FreeUserController();
        $freeUserController->showProduct($params[1]);
        break;
    case 'show-specifications':
        $freeUserController = new FreeUserController();
        $freeUserController->showSpecifications();
        break;
    case 'show-product-specification':
        $freeUserController = new FreeUserController();
        $freeUserController -> showSpecificationByName($params[1]);
        break;
    case 'show-product-by-brand':
        $freeUserController = new FreeUserController();
        $freeUserController-> showProductByBrand($params[1]);
        break;
    case 'logout':
        $adminController = new AdminController();
        $adminController -> logout();
        break;
    case 'show-join':
        $freeUserController = new FreeUserController();
        $freeUserController-> showJoin();
        break;
    case 'show-edit-join':
        $adminController = new AdminController();
        $adminController -> showEditJoin($params[1], $params[2]);
        break;
    case 'edit-join':
        $adminController = new AdminController();
        $adminController->editJoin($params[1], $params[2]);            
    default:
        echo('404 Page not found');
        break;
}

