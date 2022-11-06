{include file = "header.tpl"}
<table class="table">
  <thead>
    <tr>
        <th scope="col">id</th> 
        <th scope="col">Producto</th>
        <th scope="col">Marca</th>
        <th scope="col">Id_Especificacion</th>
        <th scope="col">Tipo</th>
        <th scope="col">Stock</th>
        <th scope="col">Precio</th>
        <th scope="col">Editar</th>
        <th scope="col">borrar</th>
    </tr>
  </thead>
  <tbody >
        <tr>
            <td ><span> <b>{$product->id_producto}</b></span></td>
            <td><span> <b>{$product->producto}</b></span></td>
            <td><span> <b>{$product->marca}</b></span></td>    
            <td><span> <b>{$specification->id_especificacion}</b></span></td>
            <td ><span> <b>{$specification->tipo}</b></span></td>
            <td><span> <b>{$specification->stock}</b></span></td>
            <td><span> <b>{$specification->precio}</b></span></td>
            <td><a href='show-editform-join/{$product->id_producto}' type='button' class='btn btn-danger'>Edit</a> </td>
            <td><a href='delete/{$product->id_producto}' type='button' class='btn btn-danger'>Delete</a></td>
        </tr>
      
    
  </tbody>
</table>

{include file="footer.tpl"}