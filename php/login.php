<?php
require_once './includes/navbar.php';
?>

<div class="container mt-5">

    <div class="row " style="margin-top: 120px;">

        <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="form-panel">
                <h3 class="mb-3 text-center">Iniciar Sesión</h3>

                <form action="login.php" id="form-login" name="form-login" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="correo@correo.com">
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control" name="pwd" id="pwd">
                    </div>
                   
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Recordar contraseña
                        </label>
                    </div>
                    <button type="submit" class="btn bg-boton mb-2 mt-2 btn-block" value="Crear cuenta" name="submit">
                        <i class="fas fa-sign-in-alt"></i>
                        Ingresar
                    </button>
                </form>

            </div>
            <hr class="dotted">
            <div class="section-register">
                <button class="btn btn-danger"><i class="fas fa-times"></i>Cancelar</button>
                <div>
                    <p style="margin: 0;" class="text-right">¿No tienes cuenta? <a href="register.php" class="text-acento">Registrarse</a></p>

                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 col-sm-12">

            <img src="../img/login.png" alt="" width="100%">
        </div>
    </div>
</div>
<?php
require_once './includes/footer.php';
?>