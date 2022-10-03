{include file="header.tpl"}
{include file="formProduct.tpl"}
<div class = "listConteiner">
    <ul class="list-group">
        {foreach from=$list item=$product}
            <li class='list-group-item d-flex justify-content-between align-items-center'>
                <span> <b>{$product->producto}</b> - {$product->marca}</span>
                <div>
                <a href='delete/{$product->id_producto}' type='button' class='btn btn-danger'>Delete</a>
                </div>
            </li>

        {/foreach}
    </ul>
</div>
{include file="footer.tpl"}
