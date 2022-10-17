<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:11:56
  from 'C:\xampp\htdocs\web2\TPE2\templates\formProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dd32ce91d11_85680837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bac24ba53d399f85dc240078aee66efa19c1a6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE2\\templates\\formProduct.tpl',
      1 => 1666044031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dd32ce91d11_85680837 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action='add'method="POST">
<div class="row">
    <div class="col">
  


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Producto</label>
            <input name="producto" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Marca</label>
            <input name="marca" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        


    <button type="submit" class="btn btn-primary mb-5">AddProduct</button>
</form>
 




<?php }
}
