<?php
require_once './includes/navbar.php';
$servidor = "localhost";
$usuario = "root";
$pwd = "";
$nombreBD = "examen-u5";
$conn = new mysqli($servidor, $usuario, $pwd, $nombreBD);

if (!$conn) {
    echo 'Error de conexión: ' . mysqli_connect_error();
}
/**
 * Si la peticion es de tipo post
 * $email= correo electronico del usuario
 * $pwd = contraseña  del usuario (encriptada)
 */
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $pwd = sha1($pwd);

    /**
     * Se crea la cuenta 
     * rol  = default('lector')
     */
    $sql = "INSERT INTO usuarios( correo, contrasenia, rol) "
        . "VALUES( '$email', '$pwd', 'lector')";
    if (mysqli_query($conn, $sql)) {
        /**
         * * Se inicia sesion para guardar al usuario en sesion
         */
        $sql = "SELECT id, correo, rol FROM usuarios "
            . "WHERE correo = '$email' AND "
            . "contrasenia = '$pwd'";
        $resultado = mysqli_query($conn, $sql);
        if ($resultado->num_rows == 1) {
            session_start();
            $usuario = mysqli_fetch_assoc($resultado);
            $_SESSION['usuario'] = $usuario;
            if ($_SESSION['usuario']['rol'] == 'lector') {
                header('Location: terminar_registro.php');
            }
        } else {
            header('Location: index.php');
        }
        mysqli_free_result($resultado);
    } else {
        echo 'Error en la creación de usuario: ' . mysqli_error($conn);
    }
}
?>

<div class="container mt-5">

    <div class="row " style="margin-top: 120px;">
        <div class="col-lg-7 col-md-6 col-sm-12 leftToRight" >

            <img src="../img/register.png" alt="" width="100%">
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12 rightToLeft">
            <div class="form-panel">
                <h3 class="mb-3 text-center">Crear nueva cuenta</h3>

                <form action="register.php" id="form-register" name="form-register" method="POST">
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
                    <button type="submit" class="btn bg-boton mb-2 mt-2 btn-block " value="Crear cuenta" name="submit">
                        <i class="fas fa-sign-in-alt"></i>
                        Crear cuenta
                    </button>
                </form>

            </div>
            <hr class="dotted">
            <div class="section-register ">
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