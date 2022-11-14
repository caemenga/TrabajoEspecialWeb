<?php
require_once './app/views/admin.view.php';
require_once './app/models/product.model.php';
require_once './app/models/specifications.model.php';
require_once './app/helpers/admin.helper.php';

class MultipleController{

    private $view;
    private $productModel;
    private $specificationsModel;
    private $helper;



    public function __construct(){
        $this->view = new AdminView();
        $this->productModel = new ProductModel();
        $this->specificationsModel = new SpecificationsModel();
        $this->helper = new AdminHelper();
    }

    public function showHome(){ 
        $list = $this->productModel->getAllProducts();
        $specification = $this->specificationsModel->getAllEspecificacitons();   
        $this->view->showProductList($list, $specification);
    }

    public function showProductById($id){ //para ver un producto determinado con sus spe
        $product = $this->productModel->getProductById($id);
        //$specification = $this->specificationsModel->getSpecificationByIdProduct($id);
        $this->view->showProduct($product);
    }

    public function filterBySpecification(){
        $tipo = $_POST['tipo'];
        $list = $this->specificationsModel->getSpecifications($tipo);
        $products = $this->productModel->getAllProducts();
        
        
        $this->view->showSpecificationsSelect($list, $products, $tipo);
    }

    public function showJoin(){
        $products = $this->productModel->getAllProducts();
        $specifications = $this->specificationsModel->getAllEspecificacitons();
        $this->view->showJoinTables($products, $specifications);
    }

    public function showEditJoin($idProd){
        $this->helper->checkLoggedIn();
        $product = $this->productModel->getProductById($idProd);
        $specification = $this->specificationsModel->getAllEspecificacitons();

        $this->view->showEditJoin($product, $specification);
    }

    public function editJoin($idProd){
        $this->helper->checkLoggedIn();
        $product = $_POST["producto"];
        $marca = $_POST["marca"];
        $idSpe = $_POST["id"];
        $this->productModel->updateProduct($product, $marca, $idProd, $idSpe);
        header("location: " .BASE_URL .'show-join');


    }
    public function deleteJoin($idProd){
        $this->helper->checkLoggedIn();
        $this->productModel->deleteProductByID($idProd);
        header("location: " .BASE_URL .'show-join');

    }

    public function showAddJoin(){
        $this->helper->checkLoggedIn();
        $list = $this->specificationsModel->getAllEspecificacitons();
        $this->view->showAddJoin($list);
    }

    public function addJoin(){
        $this->helper->checkLoggedIn();
        $product = $_POST["producto"];
        $marca = $_POST["marca"];
        $idSpe = $_POST["id"];
        
        if((isset($_POST))&&(!empty($_POST))){
        $idProd = $this->productModel->addProductToList($product, $marca, $idSpe);
        
        header("location: " .BASE_URL .'show-join');
        }
    
}
}
