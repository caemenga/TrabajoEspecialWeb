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

    public function getSpecificationById($id){
        $query = $this->db->prepare("SELECT * FROM especificaciones WHERE id_especificacion =?");
        $query->execute([$id]);
        return $query -> fetch(PDO::FETCH_OBJ);
    }

    public function getSpecificationByIdProduct($id){
        $query = $this->db->prepare("SELECT * FROM especificaciones WHERE id_producto=?");
        $query->execute([$id]);

        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function insertSpecification($tipo, $descripcion, $stock, $precio, $idProducto){
        $query = $this->db->prepare("INSERT INTO especificaciones (tipo, descripcion, stock, precio, id_producto) VALUES(?,?,?,?,?)");
        $query->execute([$tipo, $descripcion, $stock, $precio, $idProducto]);
        return $this->db->lastInsertId();
    }
    
    public function getSpecificationByName($name){
        $query = $this->db->prepare("SELECT * FROM especificaciones WHERE tipo=?");
        $query->execute([$name]);
    
        $specifications = $query->fetchAll(PDO::FETCH_OBJ);
        return $specifications;
    }

    public function updateSpecification($descripcion, $tipo, $stock, $precio, $id){
        $query = $this->db->prepare("UPDATE especificaciones SET descripcion =?, tipo =?, stock =?, precio =? WHERE id_especificacion =?");
        $query->execute([$descripcion, $tipo, $stock, $precio, $id]);
    }

    public function delete($id){
        $query = $this->db->prepare("DELETE FROM especificaciones WHERE id_especificacion = ?");
        $query -> execute([$id]); 
    }

    public function getSpecifications($tipo){
        $query = $this->db->prepare("SELECT id_especificacion FROM especificaciones WHERE tipo=?");
        $query->execute([$tipo]);
        $specifications = $query->fetchAll(PDO::FETCH_OBJ);
        return $specifications;
    }

    public function updateSpecificationByidProd($descripcion, $tipo, $stock, $precio, $idProd){
        $query = $this->db->prepare("UPDATE especificaciones SET descripcion =?, tipo =?, stock =?, precio =? WHERE id_producto =?");
        $query->execute([$descripcion, $tipo, $stock, $precio, $id]);
    }
}