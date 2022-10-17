{include file = "header.tpl"}


<select class="form-select" aria-label="Default select example">
        <option selected>Vino</option>
        <option ><a action = "show-especification/malbec">Malbec</a></option>
        <option ><a action = "show-especification/rosado">Rosado</a></option>
</select>

<select class="form-select" aria-label="Default select example">
        <option selected>Cerveza</option>
<option ><a action = "show-especification/rubia">Rubia</a></option>
        <option ><a action = "show-especification/roja">Roja</a></option>
        <option ><a action = "show-especification/negra">Negra</a></option>
</select>
<select class="form-select" aria-label="Default select example">
        <option selected>Tequila</option>
        <option ><a action = "show-especification/">Artesanal</a></option>
</select>

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
      <td><a href='show-edit-form/{$specification->id_producto}' type='button' class='btn btn-danger'>Edit</a></td>
      <td><a href='delete/{$specification->id_producto}' type='button' class='btn btn-danger'>Delete</a></td>
    </tr>
    {/foreach}    

    {include file = "footer.tpl"}