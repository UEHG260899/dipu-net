<?php
    $root_dir = "http://localhost/dipu-net";
    require_once(realpath(dirname(__FILE__) . "/../includes/navbar.php"));
    $servidor = "localhost";
    $usuarioBD = "root";
    $psw = "";
    $nomBD = "examen-u5";
    $db = mysqli_connect($servidor, $usuarioBD, $psw, $nomBD);

    if(!$db){
        echo "Ha ocurrido un error al conectarse a la base de datos: " . mysqli_error($db);
    }else{
        if(isset($_GET["id"]) && isset($_GET["articulo"])){
            $id = (int) $_GET["id"];
            $articulo = $_GET["articulo"];
            $query_autor = "SELECT *
                                FROM escritor
                                WHERE id = $id";

            $result = mysqli_query($db, $query_autor);

            if($result){
                $escritor = mysqli_fetch_assoc($result);
                mysqli_free_result($result);
            }else{
                echo "Ha ocurrido un error al momento de obtener los datos del escritor";
            }
        }
    }
?>
<link href="<?php echo $root_dir . "/css/articulos/styles_acerca.css"?>" rel="stylesheet">
    <main>
        <section class="container">
            <h5>
                <a href="<?php echo $root_dir . "/php/articulo/mostrar_articulo.php?candidato=" . $articulo?>">
                    <i class="fa fa-caret-left"></i>
                    Regresar al Artículo
                </a>
            </h5>

            <div class="row desdoble-1">
                <div class="col-12 text-center">
                <img src="<?php echo $root_dir . "/img/autores/" . $escritor["url_imagen"]?>"  class="img-responsive img-autor" alt="Imagen Autor">
                    <h5 class="mt-3"><?php echo $escritor["nombre"] . " " . $escritor["ap_paterno"] . " " . $escritor["ap_materno"]?></h5>
                </div>
            </div>
            <div class="row desdoble-2">
                <div class="col-12">
                    <div class="card card-informacion">
                        <h4 class="card-header bg-boton">Información básica del autor</h4>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Nombre:</h5>
                                    <label><?php echo $escritor["nombre"]?></label>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Apellido Paterno:</h5>
                                    <label><?php echo $escritor["ap_paterno"]?></label>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Apellido Materno</h5>
                                    <label><?php echo $escritor["ap_materno"]?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Empleo Actual:</h5>
                                    <label><?php echo $escritor["empleo"]?></label>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Organización:</h5>
                                    <label><?php echo $escritor["organizacion"]?></label>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 desdoble-3">
                <div class="col-12">
                    <div class="card card-informacion">
                        <div class="card-body">
                            <p><?php echo $escritor["acerca_de"]?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
    require_once(realpath(dirname(__FILE__) . "/../includes/footer.php"));
?>
