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
 * La peticion es tipo POST -> Se realiza el login
 */
if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $pwd = sha1($pwd);

    $sql = "SELECT id,correo, rol FROM usuarios "
        . "WHERE correo = '$email' AND "
        . "contrasenia = '$pwd'";
    $resultado = mysqli_query($conn, $sql);
    if ($resultado->num_rows == 1) {
        session_start();
        $usuario = mysqli_fetch_assoc($resultado);
        $_SESSION['usuario'] = $usuario;
        if ($_SESSION['usuario']['rol'] == 'lector') {
            header('Location: articulo/catalogo.php');
        } elseif ($_SESSION['usuario']['rol'] == 'escritor') {

            header('Location: Escritor/home.php');
        } else {
            header('Location: Administrador/home.php');
        }
    } else {
        header('Location: index.php');
    }
    mysqli_free_result($resultado);
}
?>

<div class="container mt-5">

    <div class="row " style="margin-top: 120px;">

        <div class="col-lg-5 col-md-6 col-sm-12 leftToRight">
            <div class="form-panel">
                <h3 class="mb-3 text-center">Iniciar Sesión</h3>

                <form action="login.php" id="form-login" name="form-login" id="form-login" method="POST">
                    <div class="form-group">
                        <label for="">Correo electrónico</label>
                        <input type="email" class="form-control validar" name="email" id="email" placeholder="correo@correo.com">
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control validar" name="pwd" id="pwd">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Recordar contraseña
                        </label>
                    </div>
                    <button type="button" class="btn bg-boton mb-2 mt-2 btn-block" value="Crear cuenta" name="btn-login" id="btn-login">
                        <i class="fas fa-sign-in-alt"></i>
                        Ingresar
                    </button>
                </form>

            </div>
            <hr class="dotted">
            <div class="section-register ">
                <button class="btn btn-danger"><i class="fas fa-times"></i>Cancelar</button>
                <div>
                    <p style="margin: 0;" class="text-right">¿No tienes cuenta? <a href="register.php" class="text-acento">Registrarse</a></p>

                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 col-sm-12 rightToLeft">

            <img src="../img/login.png" alt="" width="100%">
        </div>
    </div>
</div>
<!--Modal de errores-->
<div class="modal fade" id="modalErrores">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>
                    <i class="fa fa-lg fa-times-circle " style="color: red;"></i>
                    Han ocurrido errores de Validación
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body mx-4">
                Para poder continuar,debe de hacer caso a las siguientes indicaciones:
                <p id="listaErrores"></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<!--Fin modal de errores-->
<?php
require_once './includes/footer.php';
?>
<script src="<?php echo $root . '/js/login.js' ?>" type="text/javascript"></script>