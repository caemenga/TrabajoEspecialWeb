<?php

require_once './app/views/admin.view.php';
require_once './app/models/product.model.php';

class FreeUserController{
    private $productModel;
    private $view;

    public function __construct(){
        $this->productModel = new ProductModel();
        $this->view = new AdminView();
    }
    
    public function showProductList(){
        $list = $this->productModel->getAllProducts();
        $this->view->showProductList($list);
    }
    public function showProduct($name){
        $list = $this->productModel->getProductByName($name);
        $this->view->showProductListSelect($list); 
    }

}