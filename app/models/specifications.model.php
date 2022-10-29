<?php

class SpecificationsModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tiendabebidas;charset=utf8', 'root', '');
    }

    public function getAllEspecificacitons(){
        $query = $this->db->prepare("SELECT * FROM especificaciones");
        $query->execute();

        $specifications = $query->fetchAll(PDO::FETCH_OBJ);
        return $specifications;
    }

    public function getSpecificationByIdProduct($id){
        $query = $this->db->prepare("SELECT * FROM especificaciones WHERE id_producto=?");
        $query->execute([$id]);

        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    public function getSpecificationByName($name){
        $query = $this->db->prepare("SELECT * FROM especificaciones WHERE tipo=?");
        $query->execute([$name]);
    
        $specifications = $query->fetchAll(PDO::FETCH_OBJ);
        return $specifications;
    }
    public function delete($id){
        $query = $this->db->prepare("DELETE FROM especificaciones WHERE id_especificacion = ?");
        $query -> execute([$id]); 
    }
}