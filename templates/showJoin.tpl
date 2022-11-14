{include file = "header.tpl"}
<a href='show-add-join' type='button' class='btn btn-danger'>Agregar Producto con categorias</a> 
<table class="table">
  <thead>
    <tr>
        <th scope="col">id</th> 
        <th scope="col">Producto</th>
        <th scope="col">Marca</th>
        <th scope="col">tipo</th>
        <th scope="col">descripcion</th>
        <th scope="col">precio</th>
        <th scope="col">Ver</th>
        <th scope="col">Editar</th>
        <th scope="col">borrar</th>
    </tr>
  </thead>
  <tbody>
{foreach from=$products item=$product}
 {foreach from=$specifications item=$spe}
  {if $product->id_especificacion_fk == $spe->id_especificacion}
            <tr>
            <td ><span> <b>{$product->id_producto}</b></span></td>
            <td><span> <b>{$product->producto}</b></span></td>
            <td><span> <b>{$product->marca}</b></span></td>
            <td><span> <b>{$spe->tipo}</b></span></td>
            <td><span> <b>{$spe->descripcion}</b></span></td>
            <td><span> <b>{$spe->precio}</b></span></td>
            <td><a href='seeProduct/{$product->id_producto}' type='button' class='btn btn-danger'>Ver</a> </td>
            <td><a href='show-edit-join/{$product->id_producto}/{$spe->id_especificacion}' type='button' class='btn btn-danger'>Edit</a> </td>
            <td><a href='delete-join/{$product->id_producto}/{$spe->id_especificacion}' type='button' class='btn btn-danger'>Delete</a></td>
        </tr>
  {/if}
  {{/foreach}} 
{/foreach}
</tbody>
</table>
{include file="footer.tpl"}