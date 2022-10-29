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
        $this->view->showEditForm($id);
        }
    
    

    public function editProduct($id){
        
         $this->helper->checkLoggedIn();
            $product = $_POST["producto"];
            $marca = $_POST["marca"];
            $this->productModel->updateProduct($product, $marca, $id);
            
            header("location: " .BASE_URL);


    }

    public function  showEditFormSpecifications($id){
        $this->helper->checkLoggedIn();
        $this->view->showEditFormSpecifications($id);
    }
    public function deleteSpecification($id){
        $this->helper->checkLoggedIn();
        $this->specificationsModel->delete($id);
        header("location: " .BASE_URL .'show-specifications');
    } 

    public function ShowLoginForm(){
        $this->view->showLoginForm();
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

    
}




