<?php
require_once './libs/smarty-master/libs/Smarty.class.php';
class AdminView{
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty();
    }
    public function showProductList($list){
        $this->smarty->assign('list', $list);
        $this->smarty->display('productTable.tpl');
    }

    public function showEditForm($id){
        $this->smarty->assign('id_producto', $id);
        $this->smarty->display('editForm.tpl');

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
}