{include file = "header.tpl"}
<h1>Productos del tipo = {$tipo}</h1>
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
{foreach from=$products item=$product}
    {foreach from=$specifications item=$spe}
        {if $product->id_especificacion == $spe->id_especificacion}
            <tr>
            <td ><span> <b>{$product->id_producto}</b></span></td>
            <td><span> <b>{$product->producto}</b></span></td>
            <td><span> <b>{$product->marca}</b></span></td>
            <td><a href='seeProduct/{$product->id_producto}' type='button' class='btn btn-danger'>Ver</a> </td>
            <td><a href='show-edit-form/{$product->id_producto}' type='button' class='btn btn-danger'>Edit</a> </td>
            <td><a href='delete/{$product->id_producto}' type='button' class='btn btn-danger'>Delete</a></td>
        </tr>
        {/if}   
    {/foreach}
{/foreach}
</tbody>
</table>



{include file = "footer.tpl"}


  