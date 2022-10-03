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

    public function editItem($id){
        $this->productModel->editItemById($id);
        header("location: " .BASE_URL);
    }

}