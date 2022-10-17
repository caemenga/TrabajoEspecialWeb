<?php
class ProductModel{
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tiendabebidas;charset=utf8', 'root', '');
    }



   public function getAllProducts(){ 
        $query = $this->db->prepare("SELECT * FROM db_productos");
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $products;
        
        
    } 
    
    public function deleteProductByID($id){
        $query = $this->db->prepare("DELETE FROM db_productos WHERE id_producto=?");
        $query->execute([$id]);
    }

    public function addProductToList($product, $marca){


        $query = $this->db->prepare("INSERT INTO db_productos (producto, marca) VALUES(?,?)");
        $query->execute([$product, $marca]);
        return $this->db->lastInsertId();


    }

    public function updateProduct($product, $marca, $id){
        $query = $this->db->prepare("UPDATE db_productos SET producto =?, marca =? WHERE id_producto=?");
        $query->execute([$product, $marca, $id]);
    }

    public function getProductById($id){
        $query = $this->db->prepare("SELECT * FROM db_productos WHERE id_producto =?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

   public function getProductByName($name){
    $query = $this->db->prepare("SELECT * FROM db_productos WHERE producto=?");
    $query->execute([$name]);

    $products = $query->fetchAll(PDO::FETCH_OBJ);
    return $products;
   }

}

