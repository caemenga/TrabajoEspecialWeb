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
        $specification = $this->specificationsModel->getSpecificationByIdProduct($id);
        $this->view->showProduct($product, $specification);
    }

    public function filterBySpecification(){
        $tipo = $_POST['tipo'];
        $list = $this->specificationsModel->getSpecifications($tipo);
        $products = $this->productModel->getAllProducts();
        
        
        $this->view->showSpecificationsSelect($list, $products, $tipo);
    }

    public function showJoin(){
        $specifications = $this->specificationsModel->getAllEspecificacitons();
        $products = $this->productModel->getAllProducts();
        $this->view->showJoinTables($specifications, $products);
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
    public function deleteJoin($idProd, $odSpe){
        $this->helper->checkLoggedIn();
        $this->specificationsModel->delete($idSpe);
        $this->productModel->deleteProductByID($idProd);
        header("location: " .BASE_URL .'show-join');

    }

    public function showAddJoin(){
        $this->view->showAddJoin();
    }

    public function addJoin(){
        $this->helper->checkLoggedIn();
        
        $product = $_POST["producto"];
        $marca = $_POST["marca"];
        $descripcion = $_POST["descripcion"];
        $tipo = $_POST["tipo"];
        $stock = $_POST["stock"];
        $precio = $_POST["precio"];
        if((isset($_POST))&&(!empty($_POST))){
        
        $idProd = $this->productModel->addProductToList($product, $marca);
        $idSpe = $this->specificationsModel->insertSpecification($tipo, $descripcion, $stock, $precio,$idProd);
        header("location: " .BASE_URL .'show-join');
        }
    
}
}
