{include file = "header.tpl"}

<div class="row">
    <p>usted esta editando la especificacion con la id: {$specification->id_especificacion}</p>
    <p>tipo : {$specification->tipo}</p>
    <p>precio : {$specification->precio}</p>
    <p> Complete los campos que ve a continuacion para editar la especificacion</p>
</div>
<form action='edit-specification/{$id_especificacion}'method="POST">
<div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
            <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <div class="col">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tipo</label>
            <input  name="tipo" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Precio</label>
            <input name="precio" type="text" class="form-control" id="exampleInputPassword1">
        </div>
    </div>    

    <button type="submit" class="btn btn-primary mb-5">Edit</button>

</form>
{include file = "footer.tpl"}