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
    public function showProductListSelect($list){
        $this->smarty->assign('list', $list);
        $this->smarty->display('productTable.tpl');
    }
    public function showSpecifications($list){
        $this->smarty->assign('list', $list);
        $this->smarty->display('specificationsTable.tpl');
    }
}