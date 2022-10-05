{include file="header.tpl"}
{include file="formProduct.tpl"}

    <ul class="list-group">
        {foreach from=$list item=$product}
            <li class='list-group-item d-flex justify-content-between align-items-center'>
                <span> <b>{$product->producto}</b> - {$product->stock}</span>
                <div>
                <a href='show-edit-form/{$product->id_producto}' type='button' class='btn btn-danger'>Edit</a>
                    <a href='delete/{$product->id_producto}' type='button' class='btn btn-danger'>Delete</a>
                </div>
            </li>

        {/foreach}
    </ul>

{include file="footer.tpl"}
