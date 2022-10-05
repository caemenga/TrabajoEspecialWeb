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

    public function addProductToList($product, $stock){


        $query = $this->db->prepare("INSERT INTO db_productos (producto, stock) VALUES(?,?)");
        $query->execute([$product, $stock]);
        return $this->db->lastInsertId();


    }

    public function updateProduct($product, $stock, $id){
        $query = $this->db->prepare("UPDATE db_productos SET producto =?, stock =? WHERE id_producto=?");
        $query->execute([$product, $stock, $id]);
    }

   public function getBeersList(){
    $query = $this->db->prepare("SELECT producto FROM db_productos");
    $query->execute();
   }
}

