<?php
require_once './includes/navbar.php';
?>

<div class="container mt-5">

    <div class="row " style="margin-top: 120px;">
        <div class="col-lg-7 col-md-6 col-sm-12">

            <img src="../img/register.png" alt="" width="100%">
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="form-panel">
                <h3 class="mb-3 text-center">Crear nueva cuenta</h3>

                <form action="index.php" id="form-login" name="form-login" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="correo@correo.com">
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control" name="pwd" id="pwd">
                    </div>
                    <div class="form-group">
                        <label for="">Confirmar contraseña</label>
                        <input type="password" class="form-control" name="pwd-confirm" id="pwd-confirm">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Recordar contraseña
                        </label>
                    </div>
                    <button type="submit" class="btn bg-boton mb-2 mt-2 btn-block" value="Crear cuenta" name="submit">
                        <i class="fas fa-sign-in-alt"></i>
                        Crear cuenta
                    </button>
                </form>

            </div>
            <hr class="dotted">
            <div class="section-register">
                <button class="btn btn-danger"><i class="fas fa-times"></i>Cancelar</button>
                <div>
                    <p style="margin: 0;" class="text-right">¿Ya tienes cuenta? <a href="login.php" class="text-acento">Inicia sesión</a></p>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once './includes/footer.php';
?>