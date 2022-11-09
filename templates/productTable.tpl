{include file = "header.tpl"}

{include file = "formProduct.tpl"}

<form class="col-5" action="filter" method="POST">
<div class=" input-group mb-5 g-3">
    <button class="btn btn-outline-warning" type="submit">Filtrar</button>
    <select class="form-select" name="tipo" aria-label="Example select with button addon">
        <option selected>Seleccione una especificacion</option>
        {foreach from=$specification item=$tipo}
            <option value="{$tipo->tipo}">{$tipo->tipo}</option>
        {/foreach}
    </select>
</div>
</form>

<table class="table">
  <thead>
    <tr>
        <th scope="col">id</th> 
        <th scope="col">Producto</th>
        <th scope="col">Marca</th>
        <th scope="col">Ver</th>
        <th scope="col">Editar</th>
        <th scope="col">borrar</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$list item=$product}
        <tr>
            <td ><span> <b>{$product->id_producto}</b></span></td>
            <td><span> <b>{$product->producto}</b></span></td>
            <td><span> <b>{$product->marca}</b></span></td>
            <td><a href='seeProduct/{$product->id_producto}' type='button' class='btn btn-danger'>Ver</a> </td>
            <td><a href='show-edit-form/{$product->id_producto}' type='button' class='btn btn-danger'>Edit</a> </td>
            <td><a href='delete/{$product->id_producto}' type='button' class='btn btn-danger'>Delete</a></td>
        </tr>
    {{/foreach}}  
  </tbody>
</table>

{include file = "footer.tpl"}