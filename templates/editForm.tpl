{include file="header.tpl"}

<div class="row">
    <p>producto a editar : {$product->producto}</p>
    <p>id : {$product->id_producto}</p>
    <p>marca : {$product->marca}</p>
</div>
<form action='edit/{$id_producto}/{$product->id_especificacion_fk}'method="POST">
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
                        {foreach from=$specification item=$spe}
                            <option value="{$spe->id_especificacion}">{$spe->tipo}</option>
                        {/foreach}
                </select>
            </div>
        
    </div>    

    <button type="submit" class="btn btn-primary mb-5">Edit Product</button>
    </form>
    {include file="footer.tpl"}