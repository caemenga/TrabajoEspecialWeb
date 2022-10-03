<?php
/* Smarty version 4.2.1, created on 2022-10-03 20:36:54
  from 'C:\xampp\htdocs\web2\TPE2\templates\productList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b2bc6a36a83_89789225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e32d5ba2d848bef8cf70bcdc4b23a586666b773' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE2\\templates\\productList.tpl',
      1 => 1664821821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formProduct.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633b2bc6a36a83_89789225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:formProduct.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <li class='list-group-item d-flex justify-content-between align-items-center'>
                <span> <b><?php echo $_smarty_tpl->tpl_vars['product']->value->producto;?>
</b> - <?php echo $_smarty_tpl->tpl_vars['product']->value->stock;?>
</span>
                <div>
                <a href='showEditForm/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
' type='button' class='btn btn-danger'>Edit</a>
                    <a href='delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
' type='button' class='btn btn-danger'>Delete</a>
                </div>
            </li>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
