<?php
require_once './app/controllers/producto.controller.php';
require_once './app/controllers/specifications.controller.php';
require_once './app/controllers/multiple.controller.php';
require_once './app/controllers/auth.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);


// tabla de ruteo
switch ($params[0]) {
    //admin
    case 'home':
        $multipleController = new MultipleController();
        $multipleController->showHome();
        break;
    case 'log-in-form':
        $authController = new AuthController();
        $authController->ShowLoginForm();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController -> logout();
        break;
    //productos        
    case 'add':
        $productController = new ProductController();
        $productController -> addProduct();
        break;        
    case 'delete':
        $productController = new ProductController();
        $productController->delteItem($params[1]);
        break;
    case 'show-edit-form':
        $productController = new ProductController();
        $productController -> showEditForm($params[1], $params[2]);
        break;
    case 'edit':
        $productController = new ProductController();
        $productController -> editProduct($params[1], $params[2]);
        break;
    case 'show-product':
        $productController = new ProductController();
        $productController -> showProduct($params[1]);
        break;
    case 'show-product-by-brand':
        $freeUserController = new FreeUserController();
        $freeUserController-> showProductByBrand($params[1]);
        break;        
    //especificaciones 
    case 'add-specification':
        $specificationsController = new SpecificationsController();
        $specificationsController -> insertSpecification();
        break;        
    case 'show-edit-specifications':
        $specificationsController = new SpecificationsController();
        $specificationsController -> showEditFormSpecifications($params[1]);
        break;
    case 'edit-specification':
        $specificationsController = new SpecificationsController();
        $specificationsController -> editSpecification($params[1]);
        break;
       
    case 'delete-specifications':
        $specificationsController = new SpecificationsController();
        $specificationsController -> deleteSpecification($params[1]);
        break;
    
    case 'filter':
        $multipleController = new MultipleController();
        $multipleController -> filterBySpecification();
        break;
    
    case 'show-specifications':
        $specificationsController = new SpecificationsController();
        $specificationsController->showSpecifications();
        break;
    case 'show-product-specification':
        $specificationsController = new SpecificationsController();
        $specificationsController -> showSpecificationByName($params[1]);
        break;
    //multiple    
    case 'seeProduct':
        $multipleController = new MultipleController();
        $multipleController->showProductById($params[1]);
        break;        
    case 'show-join':
        $multipleController = new MultipleController();
        $multipleController-> showJoin();
        break;
    case 'show-edit-join':
        $multipleController = new MultipleController();
        $multipleController -> showEditJoin($params[1]);
        break;
    case 'edit-join':
        $multipleController = new MultipleController();
        $multipleController->editJoin($params[1]);
        break;
    case 'delete-join':
        $multipleController = new MultipleController();
        $multipleController->deleteJoin($params[1]);
        break;
    case 'show-add-join':
        $multipleController = new MultipleController();
        $multipleController->showAddJoin();   
        break;
    case 'add-join':
        $multipleController = new MultipleController();
        $multipleController -> addJoin();
        break;                  
    default:
        echo('404 Page not found');
        break;
}

