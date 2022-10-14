{include 'header.tpl'}


    <form action="validateuser" method="POST" >
        <div class="form-group">
            <label for="correo">Correo Electronico</label>
            <input type="email" required class="form-control" id="email" name="correo" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña</label>
            <input type="password" required class="form-control" id="password" name="contraseña">
        </div>

        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>


{include file='footer.tpl'}