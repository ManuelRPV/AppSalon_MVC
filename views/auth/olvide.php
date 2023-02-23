<h1 class="nombre-pagina">Olvidé mi contraseña</h1>
<p class="descipcion-pagina">Reestablece tu contraseña escribiendo tu correo a continuación</p>

<?php
include_once __DIR__ . "/../templates/alertas.php";
?>
<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">Correo</label>
        <input type="email" id="email" name="email" placeholder="Tu correo" />
    </div>

    <input type="submit" class="boton" value="Enviar instrucciones" />

</form>
<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? ¡Inicia sesión!</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? ¡Crear una!</a>
</div>