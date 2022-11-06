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

    public function updateProduct($product, $brand, $id){
        $query = $this->db->prepare("UPDATE db_productos SET producto =?, marca =? WHERE id_producto=?");
        $query->execute([$product, $brand, $id]);
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

   public function getProductByBrand($brand){
    $query = $this->db->prepare("SELECT * FROM db_productos WHERE marca = ?");
    $query->execute([$brand]);

    return $query->fetchAll(PDO::FETCH_OBJ);
   }

   public function getProductoBySpecification($id){
    $query = $this->db->prepare("SELECT * FROM db_productos WHERE id_especificacion=?");
    $query->execute([$id]);
    return $query->fetch(PDO::FETCH_OBJ);
   }

}

