{include file="header.tpl"}

<form action="validate" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

{if $error}
    <div class="alert alert-danger mt-3">
        {$error}
    </div>
{/if}


{include file = "footer.tpl"}
