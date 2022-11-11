<?php
require_once './libs/smarty-master/libs/Smarty.class.php';
class AdminView{
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty();
    }
    public function showProductList($list, $specification){
        $this->smarty->assign('list', $list);
        $this->smarty->assign('specification', $specification);
        $this->smarty->display('productTable.tpl');
    }

    public function showEditForm($id, $product){
        $this->smarty->assign('product', $product);
        $this->smarty->assign('id_producto', $id);
        $this->smarty->display('editForm.tpl');

    }
    public function showEditFormSpecifications($id, $specification){
        $this->smarty->assign('specification', $specification);
        $this->smarty->assign('id_especificacion', $id);
        $this->smarty->display('editFormSpecification.tpl');
    }

    public function showProduct($product, $specification){
        $this->smarty->assign('product', $product);
        $this->smarty->assign('specification', $specification);
        $this->smarty->display('showProduct.tpl');
    }
    public function showProductListSelect($list){
        $this->smarty->assign('list', $list);
        $this->smarty->display('productListSelect.tpl');
    }
    public function showSpecifications($list){
        $this->smarty->assign('list', $list);
        $this->smarty->display('specificationsTable.tpl');
    }

    public function showLoginForm($error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('logInForm.tpl');
    }

    public function showEditProdCat($id, $product, $specification){
        $this->smarty->assign('id', $id);
        $this->smarty->assign('product', $product);
        $this->smarty->assign('specification', $specification);
        $this->smarty->display('editProdCat.tpl');
    }

    public function showSpecificationsSelect($list, $products, $tipo){
        $this->smarty->assign("specifications", $list);
        $this->smarty->assign("products", $products);
        $this->smarty->assign("tipo", $tipo);
        $this->smarty->display("SelectProducts.tpl");

    }
}