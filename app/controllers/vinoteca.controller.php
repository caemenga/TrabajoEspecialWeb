<?php
require_once './app/views/vinoteca.view.php';
require_once './app/models/product.model.php';

class VinotecaController{
   
    private $view;
    private $productModel;

    public function __construct(){
        $this->view = new VinotecaView();
        $this->productModel = new ProductModel();
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
}
