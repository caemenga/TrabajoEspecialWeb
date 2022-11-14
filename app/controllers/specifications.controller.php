<?php
require_once './app/views/admin.view.php';
require_once './app/models/product.model.php';
require_once './app/models/specifications.model.php';

class SpecificationsController{
    private $specificationsModel;
    private $view;
    private $helper;

    public function __construct(){
        $this->model =new SpecificationsModel();
        $this->view = new AdminView();
        $this->helper = new AdminHelper();
    }

    public function showSpecifications(){
        $list = $this->model->getAllEspecificacitons();
        $this->view->showSpecifications($list);
    }
    public function showSpecificationByName($name){
        $list = $this->model->getSpecificationByName($name);
        $this->view->showSpecifications($list);
    }


    

    //funcionalidades del admin

    public function insertSpecification(){
        $this->helper->checkLoggedIn();
        if((isset($_POST))&&(!empty($_POST))){
        $tipo = $_POST["tipo"];
        $descripcion = $_POST["descripcion"];
        $stock = $_POST["stock"];
        $precio = $_POST["precio"];
        $idProducto = $_POST["id_producto"];
        
        
        $id = $this->model->insertSpecification($tipo, $descripcion, $stock, $precio, $idProducto);
        }
        header("location: " .BASE_URL .'show-specifications');
    }

    public function  showEditFormSpecifications($id){
        $this->helper->checkLoggedIn();
        $specification = $this->model->getSpecificationById($id);
        $this->view->showEditFormSpecifications($id, $specification);
    }

    public function editSpecification($id){
        $this->helper->checkLoggedIn();
        $descripcion = $_POST["descripcion"];
        $tipo = $_POST["tipo"];
        $stock = $_POST["stock"];
        $precio = $_POST["precio"];
        $this->model->updateSpecification($descripcion, $tipo, $stock, $precio, $id);
        header("location: " .BASE_URL .'show-specifications');
    }
    public function deleteSpecification($id){
        $this->helper->checkLoggedIn();
        $this->model->delete($id);
        header("location: " .BASE_URL .'show-specifications');
    } 
}