<?php
require_once './app/views/admin.view.php';
require_once './app/models/product.model.php';
require_once './app/models/specifications.model.php';

class AdminController{
   
    private $view;
    private $productModel;
    private $specificationsModel;

    public function __construct(){
        $this->view = new AdminView();
        $this->productModel = new ProductModel();
        $this->specificationsModel = new SpecificationsModel();
    }

    public function showProductList(){
        $list = $this->productModel->getAllProducts();
        $this->view->showProductList($list);
    }

    public function delteItem($id){
        $this->productModel->deleteProductByID($id);
        header("location: " .BASE_URL);
    }



    function addProduct(){
        if((isset($_POST))&&(!empty($_POST))){
        $product = $_POST["producto"];
        $stock = $_POST["stock"];
        
        
        $id = $this->productModel->addProductToList($product, $stock);
        
        
        }
        header("location: " .BASE_URL);
    }
    public function showEditForm($id){
        $this->view->showEditForm($id);

    }
    

    public function editProduct($id){
        if((isset($_POST))&&(!empty($_POST))){
            $product = $_POST["producto"];
            $stock = $_POST["stock"];
            $id = $this->productModel->updateProduct($product, $stock, $id);
            }
            header("location: " .BASE_URL);

    }

    public function showProduct($name){
        $list = $this->productModel->getProductByName($name);
        $this->view->showProductList($list); 
    }
}
