<?php
require_once './app/views/admin.view.php';
require_once './app/models/product.model.php';
require_once './app/helpers/admin.helper.php';
class ProductController{
    private $view;
    private $model; 
    private $helper;

    public function __construct(){
        $this->model = new ProductModel();
        $this->view = new AdminView();
        $this->helper = new AdminHelper();
    }

   
    public function showProduct($name = null){ 
        $list = $this->model->getProductByName($name);
        $this->view->showProductListSelect($list); 
    }

    public function showProductByBrand($brand){
        $list = $this->model->getProductByBrand($brand);
        $this->view->showProductListSelect($list); 
    }

    

    //-----funcionalidad del admin----
    public function delteItem($id){
        $this->helper->checkLoggedIn();
        $this->model->deleteProductByID($id);
        header("location: " .BASE_URL);
        
    }

    function addProduct(){
        $this->helper->checkLoggedIn();
        if((isset($_POST))&&(!empty($_POST))){
        $product = $_POST["producto"];
        $marca = $_POST["marca"];
        $id = $this->model->addProductToList($product, $marca);
        }
        header("location: " .BASE_URL);  
    }

    public function showEditForm($id){
        $this->helper->checkLoggedIn();
        $list = $this->model->getProductById($id);
        $this->view->showEditForm($id, $list);
        }
    
    public function editProduct($id){
         $this->helper->checkLoggedIn();
            $product = $_POST["producto"];
            $marca = $_POST["marca"];
            $this->model->updateProduct($product, $marca, $id);
            
            header("location: " .BASE_URL);


    }
}