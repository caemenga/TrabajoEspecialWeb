{include file="header.tpl" }

<form action='add-join'method="POST">
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
            <div class="col">
            <div class="mb-3">
                <div class=" input-group mb-5 g-3">
                    <select class="form-select" name="id" aria-label="Example select with button addon">
                        <option selected>Seleccione un Tipo</option>
                        {foreach from=$spe item=$s}
                            <option value="{$s->id_especificacion}">{$s->tipo}</option>
                        {/foreach}
                </select>
                </div>
            </div>
    <button type="submit" class="btn btn-primary mb-5">Add product</button>
</form>



{include file="footer.tpl" }