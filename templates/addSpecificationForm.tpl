<form action='add-specification'method="POST">
<div class="row">
    <div class="col">
      <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo</label>
            <input name="tipo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
            <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">stock</label>
            <input name="stock" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">precio</label>
            <input name="precio" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">id producto</label>
            <input name="id_producto" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        


    <button type="submit" class="btn btn-primary mb-5">AddSpecification</button>
</form>