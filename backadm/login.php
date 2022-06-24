<?php

$pass = '';

if (isset($_SESSION['pass'])) {
    $pass = $_SESSION['pass'];
    session_destroy();
}

?>

<div class="login">
    <h3>Iniciar sesión</h3>
    <form action="auth.php" method="post">
        <div class="mb-3">
            <label for="pass" class="col-form-label">Contraseña</label>
            <div class="row g-0">
                <div class="col-auto">
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Introduzca la contraseña">
                </div>
                <div class="col-auto d-flex">
                    <button title="Mostrar contraseña" class="ms-2 my-auto bi-eye-slash" for="pass" id="togglePassword" type="button"></button>
                </div>
            </div>
            <span class="form-text text-danger <?php if ($pass == '') echo 'd-none' ?>">
                Contraseña incorrecta.
            </span>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </div>

    </form>
</div>

<script>

</script>