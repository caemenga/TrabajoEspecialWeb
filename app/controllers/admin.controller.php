<?php
require_once './app/views/admin.view.php';
require_once './app/models/product.model.php';
require_once './app/models/user.model.php';
require_once './app/models/specifications.model.php';
require_once './app/helpers/admin.helper.php';

class AdminController{
   
    private $view;
    private $productModel;
    private $userModel;
    private $specificationsModel;
    private $helper;

    public function __construct(){
        $this->view = new AdminView();
        $this->productModel = new ProductModel();
        $this->specificationsModel = new SpecificationsModel();
        $this->userModel = new UserModel();
        $this->helper = new AdminHelper();
    }


    public function delteItem($id){
        $this->helper->checkLoggedIn();
        $this->productModel->deleteProductByID($id);
        header("location: " .BASE_URL);
        
    }



    function addProduct(){
        $this->helper->checkLoggedIn();
        if((isset($_POST))&&(!empty($_POST))){
        $product = $_POST["producto"];
        $marca = $_POST["marca"];
        
        
        $id = $this->productModel->addProductToList($product, $marca);
        
        
        }
        header("location: " .BASE_URL);
    
    }

    public function showEditForm($id){
        $this->helper->checkLoggedIn();
        $list = $this->productModel->getProductById($id);
        
        $this->view->showEditForm($id, $list);
        }
    
    

    public function editProduct($id){
        
         $this->helper->checkLoggedIn();
            $product = $_POST["producto"];
            $marca = $_POST["marca"];
            $this->productModel->updateProduct($product, $marca, $id);
            
            header("location: " .BASE_URL);


    }
    
    public function insertSpecification(){
        $this->helper->checkLoggedIn();
        if((isset($_POST))&&(!empty($_POST))){
        $tipo = $_POST["tipo"];
        $descripcion = $_POST["descripcion"];
        $stock = $_POST["stock"];
        $precio = $_POST["precio"];
        $idProducto = $_POST["id_producto"];
        
        
        $id = $this->specificationsModel->insertSpecification($tipo, $descripcion, $stock, $precio, $idProducto);
        }
        header("location: " .BASE_URL .'show-specifications');
    }

    public function  showEditFormSpecifications($id){
        $this->helper->checkLoggedIn();
        $specification = $this->specificationsModel->getSpecificationById($id);
        $this->view->showEditFormSpecifications($id, $specification);
    }

    public function editSpecification($id){
        $this->helper->checkLoggedIn();
        $descripcion = $_POST["descripcion"];
        $tipo = $_POST["tipo"];
        $stock = $_POST["stock"];
        $precio = $_POST["precio"];
        $this->specificationsModel->updateSpecification($descripcion, $tipo, $stock, $precio, $id);
        header("location: " .BASE_URL .'show-specifications');
    }
    public function deleteSpecification($id){
        $this->helper->checkLoggedIn();
        $this->specificationsModel->delete($id);
        header("location: " .BASE_URL .'show-specifications');
    } 

    public function ShowLoginForm(){
        $this->view->showLoginForm();
    }
    public function showEditProdCat($id){
        $product = $this->productModel->getProductById($id);
        $specification = $this->specificationsModel->getSpecificationById($id);
        $this->view->showEditProdCat($id, $product, $specification);
    }

    public function validateUser(){
        //if(!empty($_POST['email'])&& !empty($_POST['password']))
        $email = $_POST['email'];
        $password = $_POST['password'];

        // busco el usuario por email
        $user = $this->userModel->getUserByEmail($email);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($user && password_verify($password, ($user->password))){

            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("location: " . BASE_URL);
        } else {
            // si los datos son incorrectos muestro el form con un erro
           $this->view->showLoginForm("El usuario o la contraseña no existe.");
        }

    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'home');

    }

    public function showEditJoin($idProd, $idSpe){
        $this->helper->checkLoggedIn();
        $product = $this->productModel->getProductById($idProd);
        $specification = $this->specificationsModel->getSpecificationById($idSpe);

        $this->view->showEditJoin($product, $specification);
    }

    public function editJoin($idProd, $idSpe){
        $this->helper->checkLoggedIn();
        $product = $_POST["producto"];
        $marca = $_POST["marca"];
        $descripcion = $_POST["descripcion"];
        $tipo = $_POST["tipo"];
        $stock = $_POST["stock"];
        $precio = $_POST["precio"];
        $this->specificationsModel->updateSpecification($descripcion, $tipo, $stock, $precio, $idSpe);
        $this->productModel->updateProduct($product, $marca, $idProd);
        header("location: " .BASE_URL .'show-join');


    }


    
}




