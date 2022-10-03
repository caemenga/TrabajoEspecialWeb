<?php
require_once './libs/smarty-master/libs/Smarty.class.php';
class VinotecaView{
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty();
    }
    public function showProductList($list){
        $this->smarty->assign('list', $list);
        $this->smarty->display('productList.tpl');
    }

    public function showEditForm($id){
        $this->smarty->assign('id_producto', $id);
        $this->smarty->display('editForm.tpl');

    }
}