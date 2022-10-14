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


<ul class="list-group">
{foreach from=$list item=$product}
    <li class='list-group-item d-flex justify-content-between align-items-center'>
        <span> <b>{$product->producto}</b> - {$product->marca}</span>
        <div>
        <a href='show-edit-form/{$product->id_producto}' type='button' class='btn btn-danger'>Edit</a>
            <a href='delete/{$product->id_producto}' type='button' class='btn btn-danger'>Delete</a>
        </div>
    </li>

{/foreach}
</ul>

{include file="footer.tpl"}