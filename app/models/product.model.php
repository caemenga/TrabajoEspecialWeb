<?php
class ProductModel{
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tienda;charset=utf8', 'root', '');
    }



   public function getAllProducts(){ 
        $query = $this->db->prepare("SELECT * FROM productos");
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $products;
        
        
    } 
    
    public function deleteProductByID($id){
        $query = $this->db->prepare("DELETE FROM productos WHERE id_producto=?");
        $query->execute([$id]);
    }
    public function getProdAndSpe(){
        $query = $this->db->prepare("SELECT * FROM productos JOIN especificaciones");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function addProductToList($product, $marca, $idSpe){
        $query = $this->db->prepare("INSERT INTO productos (producto, marca, id_especificacion_fk) VALUES(?,?,?)");
        $query->execute([$product, $marca, $idSpe]);
        return $this->db->lastInsertId();
    }

    public function updateProduct($product, $brand, $id, $idSpe){
        $query = $this->db->prepare("UPDATE productos SET producto =?, marca =?, id_especificacion_fk=? WHERE id_producto=?");
        $query->execute([$product, $brand,$idSpe, $id]);
    }

    public function getProductById($id){
        $query = $this->db->prepare("SELECT * FROM productos JOIN especificaciones ON productos.id_especificacion_fk = especificaciones.id_especificacion WHERE id_producto =?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

   public function getProductByName($name){
    $query = $this->db->prepare("SELECT * FROM productos WHERE producto=?");
    $query->execute([$name]);

    $products = $query->fetchAll(PDO::FETCH_OBJ);
    return $products;
   }

   public function getProductByBrand($brand){
    $query = $this->db->prepare("SELECT * FROM productos WHERE marca = ?");
    $query->execute([$brand]);

    return $query->fetchAll(PDO::FETCH_OBJ);
   }

   public function getProductoBySpecification($id){
    $query = $this->db->prepare("SELECT * FROM productos WHERE id_especificacion=?");
    $query->execute([$id]);
    return $query->fetch(PDO::FETCH_OBJ);
   }

}

