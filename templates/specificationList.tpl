{include file= "header.tpl"}

<ul class="list-group">
        {foreach from=$list item=$specification}
            <li class='list-group-item d-flex justify-content-between align-items-center'>
                <span> <b>{$specification->id_producto}</b> - {$specification->} - {$specification->descripcion} - {$specification->precio} - {$specification->stock}</span>
                <div>
                <a href='show-edit-form/{$product->id_producto}' type='button' class='btn btn-danger'>Edit</a>
                    <a href='delete/{$product->id_producto}' type='button' class='btn btn-danger'>Delete</a>
                </div>
            </li>

        {/foreach}
    </ul>