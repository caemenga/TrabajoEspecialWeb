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
        $precio = $_POST["precio"];
        
        
        $id = $this->model->insertSpecification($tipo, $descripcion, $precio);
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
        $precio = $_POST["precio"];
        $this->model->updateSpecification($descripcion, $tipo, $precio, $id);
        header("location: " .BASE_URL .'show-specifications');
    }
    public function deleteSpecification($id){
        $this->helper->checkLoggedIn();
        try {
        $this->model->delete($id);
        header("location: " .BASE_URL .'show-specifications');
        }catch (PDOException $e){
        $this->view->showerror("No se puede eliminar esta especificacion porque pertenece a al menos una bebida");
       } 
    }
}

