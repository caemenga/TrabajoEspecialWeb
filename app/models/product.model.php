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
    
    public function getProductById($id){
        
    }
}

