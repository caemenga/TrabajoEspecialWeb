<?php
/* Smarty version 4.2.1, created on 2022-11-15 17:44:57
  from 'C:\xampp\htdocs\web2\TPE2\templates\editForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6373c209466951_37392816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89d13d843519e3933caa3633cab6e852d8b4e7b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE2\\templates\\editForm.tpl',
      1 => 1668446684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6373c209466951_37392816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <p>producto a editar : <?php echo $_smarty_tpl->tpl_vars['product']->value->producto;?>
</p>
    <p>id : <?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
</p>
    <p>marca : <?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</p>
</div>
<form action='edit/<?php echo $_smarty_tpl->tpl_vars['id_producto']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_especificacion_fk;?>
'method="POST">
<div class="row">
    <div class="col">
  


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Producto</label>
            <input name="producto" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">marca</label>
            <input name="marca" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
                <div class=" input-group mb-5 g-3">
                    <select class="form-select" name="id" aria-label="Example select with button addon">
                        <option selected>Seleccione un Tipo</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['specification']->value, 'spe');
$_smarty_tpl->tpl_vars['spe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['spe']->value) {
$_smarty_tpl->tpl_vars['spe']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['spe']->value->id_especificacion;?>
"><?php echo $_smarty_tpl->tpl_vars['spe']->value->tipo;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        
    </div>    

    <button type="submit" class="btn btn-primary mb-5">Edit Product</button>
    </form>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
