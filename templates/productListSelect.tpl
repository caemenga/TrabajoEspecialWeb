{include file="header.tpl"}

{if $list[0]->producto == "cerveza"}
<ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Marcas de Cervezas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="showproduct-by-marc/quilmes">quilmes</a>
            <a class="dropdown-item" href="showproduct-by-marc/brhama">brhama</a>
            <a class="dropdown-item" href="showproduct-by-marc/andes">andes</a>
          </div>
        </li>
</ul>     
{else if $list[0]->producto == "vino"}
<ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Marcas de Vinos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="showproduct-by-marc/toro">toro</a>
            <a class="dropdown-item" href="showproduct-by-marc/septima">septima</a>
            <a class="dropdown-item" href="showproduct-by-marc/san_felicien">San Felicien</a>
          </div>
        </li>
</ul>     
{/if}



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