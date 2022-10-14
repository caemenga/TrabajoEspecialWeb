{include file="header.tpl"}
<select class="form-select" aria-label="Default select example">
        <option selected>tipos</option>
{if $list[0]->producto == "vino"}
        <option ><a action = "show-prod-by-especification/malbec">Malbec</a></option>
        <option ><a action = "show-prod-by-especification/rosado">rosado</a></option>
        <option ><a action = "show-prod-by-especification/espumante">Espumante</a></option>
{else if $list[0]->producto == "cerveza"}
        <option ><a action = "show-prod-by-especification/roja">Roja</a></option>
        <option ><a action = "show-prod-by-especification/rubia">Rubia</a></option>
        <option ><a action = "show-prod-by-especification/negra">Negra</a></option>
{/if}
</select>


<table class="table">
  <thead>
    <tr>
        <th scope="col">id</th> 
        <th scope="col">Producto</th>
        <th scope="col">Marca</th>
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
            <td><a href='show-edit-form/{$product->id_producto}' type='button' class='btn btn-danger'>Edit</a> </td>
            <td><a href='delete/{$product->id_producto}' type='button' class='btn btn-danger'>Delete</a></td>
        </tr>
    {{/foreach}}  
  </tbody>
</table>
</ul>

{include file="footer.tpl"}