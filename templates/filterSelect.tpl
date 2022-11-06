

<form class="col-5" action="filter" method="POST">
<div class=" input-group mb-5 g-3">
    <button class="btn btn-outline-warning" type="submit">Filtrar</button>
    <select class="form-select" name="tipo" aria-label="Example select with button addon">
        <option selected>Seleccione una especificacion</option>
        {foreach from=$specification item=$tipo}
            <option value="{$tipo->tipo}">{$tipo->tipo}</option>
        {/foreach}
    </select>
</div>
</form>