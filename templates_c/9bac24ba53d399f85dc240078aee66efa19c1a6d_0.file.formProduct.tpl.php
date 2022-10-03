<?php
/* Smarty version 4.2.1, created on 2022-10-03 16:52:25
  from 'C:\xampp\htdocs\web2\TPE2\templates\formProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633af72977e3f5_24489304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bac24ba53d399f85dc240078aee66efa19c1a6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE2\\templates\\formProduct.tpl',
      1 => 1664808743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633af72977e3f5_24489304 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form>
<div class="row">
    <div class="col">
  


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Producto</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Marca</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Stock</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <div class="col">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Marca</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Precio</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
    </div>    


    <button type="button" class="btn btn-primary mb-5">AddProduct</button>
</form>
 




<?php }
}
