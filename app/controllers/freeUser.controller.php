<?php

require_once './app/views/admin.view.php';
require_once './app/models/product.model.php';
require_once './app/models/specifications.model.php';
class FreeUserController{
    private $productModel;
    private $specificationsModel;
    private $view;

    public function __construct(){
        $this->productModel = new ProductModel();
        $this->specificationsModel = new SpecificationsModel();
        $this->view = new AdminView();
    }
    
    public function showProductList(){
        $list = $this->productModel->getAllProducts();
        $specification = $this->specificationsModel->getAllEspecificacitons();   
        $this->view->showProductList($list, $specification);
    }
    public function showProduct($name = null){
        $list = $this->productModel->getProductByName($name);
        
        $this->view->showProductListSelect($list); 
    }

    public function showProductByBrand($brand){
        $list = $this->productModel->getProductByBrand($brand);
        $this->view->showProductListSelect($list); 
    }

    public function showProductById($id){
        $product = $this->productModel->getProductById($id);
        $specification = $this->specificationsModel->getSpecificationByIdProduct($id);
        $this->view->showProduct($product, $specification);
    }

    public function showSpecifications(){
        $list = $this->specificationsModel->getAllEspecificacitons();
        $this->view->showSpecifications($list);
    }
    public function showSpecificationByName($name){
        $list = $this->specificationsModel->getSpecificationByName($name);
        $this->view->showSpecifications($list);
    }


    public function filterBySpecification(){
        $tipo = $_POST['tipo'];
        $list = $this->specificationsModel->getSpecificationByName($tipo);
        $this->view->showSpecifications($list);
    }

}