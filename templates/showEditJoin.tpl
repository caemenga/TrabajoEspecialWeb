{include file= "header.tpl"}

<div class="row">
    <p>producto a editar : {$product->producto}</p>
    <p>id : {$product->id_producto}</p>
    <p>marca : {$product->marca}</p>
</div>
<form action='edit-join/{$product->id_producto}/{$specification->id_especificacion}'method="POST">
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
                <label for="exampleInputPassword1" class="form-label">Descripcion</label>
                <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>    
            <div class="col">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tipo</label>
                <input  name="tipo" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Stock</label>
                <input  name="stock" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Precio</label>
                <input name="precio" type="text" class="form-control" id="exampleInputPassword1">
            </div>
        </div>    
    <button type="submit" class="btn btn-primary mb-5">Edit Product</button>
</form>


{include file = "footer.tpl"}