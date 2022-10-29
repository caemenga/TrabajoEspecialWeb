{include file = "header.tpl"}

<div class="row">
<ul>
<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tipos de Cervezas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="show-product-specification/roja">roja</a>
            <a class="dropdown-item" href="show-product-specification/rubia">rubia</a>
            <a class="dropdown-item" href="show-product-specification/negra">negra</a>
          </div>
        </li>
</ul>     
<ul>
<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tipos de Vinos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="show-product-specification/malbec">malbec</a>
            <a class="dropdown-item" href="show-product-specification/rosado">Rosado</a>
            <a class="dropdown-item" href="show-product-specification/espumante">Espumante</a>
          </div>
        </li>
</ul>      
<ul>
<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tipos de Tequila
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="show-product-specification/artesanal">artesanal</a>
          </div>
        </li>
</ul>    
</div>  

<table class="table">
  <thead>
    <tr>
      <th scope="col">id producto</th>
      <th scope="col">Tipo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">precio</th>
      <th scope="col"> stock </th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$list item=$specification}
    <tr>
      <th scope="row"><span> <b>{$specification->id_producto}</b></th>
      <td>{$specification->tipo}</td>
      <td>{$specification->descripcion}</td>
      <td>{$specification->precio}</td>
      <td>{$specification->stock}</td>
      <td><a href='show-edit-specifications/{$specification->id_especificacion}' type='button' class='btn btn-danger'>Edit</a></td>
      <td><a href='delete-specifications/{$specification->id_especificacion}' type='button' class='btn btn-danger'>Delete</a></td>
    </tr>
    {/foreach}    

    {include file = "footer.tpl"}