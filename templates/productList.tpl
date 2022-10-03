{include file="header.tpl"}

<ul class="list-group">
    {foreach from=$list item=$product}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$product->producto}</b> - {$product->marca}</span>
        </li>

    {/foreach}
</ul>

{include file="footer.tpl"}
