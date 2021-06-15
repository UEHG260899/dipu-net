<?php
    require_once './includes/navbar.php';
    session_start();
    $root_directory = "http://localhost/dipu-net";
    $servidor = "localhost";
    $usuarioBD = "root";
    $pwdBD = "";
    $nombreBD = "examen-u5";
    $db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nombreBD);

    if(isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];
        $ap_pat = $_POST["ap_pat"];
        $ap_mat = $_POST["ap_mat"];
        $fecha_nac = date("Y-m-d", strtotime($_POST["fecha_nac"]));

        $correo = $_SESSION["usuario"]["correo"];
        $query_usr = "SELECT id
                        FROM usuarios
                        WHERE correo = '$correo'";
        $result = mysqli_query($db, $query_usr);
        if($result){
            while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $id = $rows["id"];
            }
            $sql = "INSERT INTO lector VALUES(NULL, $id, '$nombre', '$ap_pat', '$ap_mat', '$fecha_nac')";
            $res_insert = mysqli_query($db, $sql);
            if(!$res_insert){
                //TODO : Redirigir a la página de error
                echo "Error al insertar al nuevo lector: " . mysqli_error($db);
            }else{
                header("Location: index.php");
            }
        }else{
            echo "Error al obtener el id del usuario: " . mysqli_error($db);
        }
    }
?>

<link href="<?php echo $root_directory . '/css/styles_fin_registro.css'?>" rel="stylesheet">
<main>
    <section class="container">
        <h2 class="text-center">Terminemos de Registrarte!</h2>
        <div class="row">
            <div class="col-12">
                <div class="panel-formulario">
                    <form action="terminar_registro.php" method="POST" id="formFinRegistro">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre(s):</label>
                                    <input class="form-control validar" id="nombre" name="nombre" type="text"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="ap_pat">Apellido Paterno:</label>
                                    <input class="form-control validar" id="ap_pat" name="ap_pat"
                                        type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="ap_mat">Apellido Materno:</label>
                                    <input type="text" class="form-control validar"
                                        id="ap_mat" name="ap_mat" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="fecha_nac">Fecha de nacimiento:</label>
                                    <input type="date" class="form-control validar"
                                        id="fecha_nac" name="fecha_nac" required>
                                </div>
                            </div>
                        </div>
                        <div class="row text-right">
                            <div class="col-12">
                                <button class="btn btn-primary" type="button" id="btnFinaliza">Guardar datos</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<!--Modal de errores-->
<div class="modal fade" id="modalErrores">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>
                    <i class="fa fa-lg fa-times-circle"></i>
                    Han ocurrido errores de Validación
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
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
<script src="<?php echo $root_directory . '/js/termina_registro/script.js'?>" type="text/javascript"></script>