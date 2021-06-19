<?php
require_once(realpath(dirname(__FILE__) . "../../../includes/navbar_escritor.php"));
?>

<link rel="stylesheet" href="<?php echo $root . "/css/error/estilos.css"; ?>">

<?php

$tipo = "Error";
$descipcion = "ha ocurrido un problemaal cargar la pagina.";
$recomendacion = "
    <li>Verifica la URL solicitada.</li>
    <li>Revisa las cookies del navegador.</li>
    <li>Interntar más tarde.</li>
    <li>Contactar con el administrador de la pagina.</li>
    ";
?>

<main>

    <section class="container mb-5">
        <br><br>

        <div class="card mt-5 mt-5 mb-5">
            <h4 class="card-header" style="background-color: #ab49ccce;"><?php echo $tipo ?><b></b></h4>
            <div class="card-body">

                <div class="form-row">

                    <div class="col-5">
                        <div class="face">
                            <div class="band">
                                <div class="red"></div>
                                <div class="white"></div>
                                <div class="blue"></div>
                            </div>
                            <div class="eyes"></div>
                            <div class="dimples"></div>
                            <div class="mouth"></div>
                            <center class="mt-5">
                                <h2 style="color: #8e22bb;"><b>DIPU-NET</b></h2>
                            </center>
                        </div>

                    </div>


                    <div class="col-7">

                        <h5>¡ <?php echo $tipo ?> !</h5>
                        <br>

                        <h5> <?php echo $descipcion ?> </h5>
                        <br>

                        <h5> <?php echo $recomendacion ?> </h5>
                        <br>
                        <button class="btn btn-sm float-right mt-5">Regresar a Inicio</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php
require_once(realpath(dirname(__FILE__) . "../../../includes/footer.php"));
?>