<?php
require_once(realpath(dirname(__FILE__) . "../../../includes/navbar_escritor.php"));
?>


<?php

$error = $_GET["error"];
if (substr($error, 0, 1) == '4') {
    $tipo = "Error en el cliente";
    $descipcion = "ha ocurrido un problema con la solicitud del lado del cliente, por lo que no se puede cargar la página.";
    $recomendacion = "
    <li>Verifica la URL solicitada</li>
    <li>Revisa las cookies del navegador</li>
    <li>Borra la caché DNS</li>
    <li>Contactar con el administrador de la pagina</li>
    ";
    $img = "error_400.png";
}else{
    $tipo = "Error en el servidor";
    $descipcion = "ha ocurrido un problema con la solicitud del lado del servidor, por lo que no se puede mostrar la página correctamente.";
    $recomendacion = "
    <li>Intenta refrescar la página</li>
    <li>Al ser un problema por parte del servidor se recomienda contactar directamente al administrador del sitio</li>";
    $img = "error_500.png";
}

?>

<main>

    <section class="container mb-5">
        <br><br>

        <div class="card mt-5 mt-5 mb-5">
            <h4 class="card-header"><?php echo $tipo . "-" ?><b>Error: <?php echo $error ?></b></h4>
            <div class="card-body">

                <div class="form-row">

                    <div class="col-5">
                        <div>

                            <div class="text-center">
                                <img src="<?php echo $root . '/img/errores/' . $img ?>" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>

                    </div>


                    <div class="col-7">

                        <h5>¡ <?php echo $tipo ?> !</h5>
                        <br>

                        <h5> <?php echo $descipcion ?> </h5>
                        <br>

                        <h5> <?php echo $recomendacion ?> </h5>
                        <br>

                        <h8> Código de error: <?php echo $error ?> </h8>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php
require_once(realpath(dirname(__FILE__) . "../../../includes/footer.php"));
?>