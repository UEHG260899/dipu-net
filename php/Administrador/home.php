<?php
require_once(realpath(dirname(__FILE__) . "../../includes/navbar_admin.php"));

$serv = "localhost";
$usr = "root";
$pwd = "";
$nomBD = "examen-u5";
$db = mysqli_connect($serv, $usr, $pwd, $nomBD);
    if(!$db){
        die("La conexión fallo: " . mysqli_connect_error());
    }else{

        $sqlPublicados = "SELECT COUNT(id) AS publicados FROM articulo WHERE  estatus = 'publicado'";
        $publicados = mysqli_query($db, $sqlPublicados);
        $nuPublicados = mysqli_fetch_assoc($publicados);  

        $sqlLectores = "SELECT COUNT(id) AS lectores FROM usuarios WHERE  rol = 'lector'";
        $lectores = mysqli_query($db, $sqlLectores);
        $nulectores = mysqli_fetch_assoc($lectores);  

        $sqlEscritores = "SELECT COUNT(id) AS escritores FROM usuarios WHERE  rol = 'escritor'";
        $escritores = mysqli_query($db, $sqlEscritores);
        $nuescritores= mysqli_fetch_assoc($escritores);  

        $sqlCandidato = "SELECT COUNT(id) AS candidatos FROM candidato";
        $candidatos = mysqli_query($db, $sqlCandidato);
        $nucandidatos = mysqli_fetch_assoc($candidatos);  
    }

?>
<link rel="stylesheet" href="<?php echo $root . "/css/escritor/estilos.css"; ?>">
<div class="container mb-5 mt-5">
    <!--Sección administrador-->
    <div class="row justify-content-md-center mb-5 about">
        <div class="col-md-4 mt-5" style="text-align:center">
            <h2>Administrador</h2>
        </div>
    </div>
    <div class="row justify-content-around ">
        <div class="col-lg-3 col-md-3 col-sm-12 leftToRight">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header bg-boton">
                    <p class="card-text text-center">Artículos Publicados</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center"><?php echo $nuPublicados['publicados']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 leftToRight">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header bg-boton">
                    <p class="card-text text-center">Lectores</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center"><?php echo $nulectores['lectores']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 rightToLeft">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header bg-boton">
                    <p class="card-text text-center">Escritores</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center"><?php echo $nuescritores['escritores']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 rightToLeft">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header bg-boton">
                    <p class="card-text text-center">Candidatos</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center"><?php echo $nucandidatos['candidatos']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Sección administrador-->
    <div class="col-md-12">
        <hr />
    </div>
    <!--Sección articulos publicados-->
    <div class="row justify-content-md-center mt-5 about">
        <div class="col-md-6" style="text-align:center">
            <h2>Artículos publicados en la página</h2>
        </div>
    </div>
    <!--Carousel-->
    <div class="col-md-12 ">
        <div class="mb-5">
            <div id="carruselPublicados" class="carousel slide carousel-multi-item about" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#carruselPublicados" data-slide="prev"><i
                            class="fas fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#carruselPublicados" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <?php
                    
$sql = "SELECT articulo.no_vistas,articulo.id,CONCAT_WS(' ',escritor.nombre ,escritor.ap_paterno ,escritor.ap_materno) AS nombreEsc ,CONCAT_WS(' ',candidato.nombre ,candidato.ap_paterno ,candidato.ap_materno) AS nombre, candidato.url_imagen as imagenCan, partidos.url_imagen as imagenPar FROM articulo INNER JOIN candidato ON candidato.id = articulo.id_candidato INNER JOIN partidos ON candidato.id_partido = partidos.id  INNER JOIN escritor ON articulo.id_escritor = escritor.id WHERE  articulo.estatus = 'publicado'";
$resultado = mysqli_query($db, $sql);

$i = 0;

while($row = $resultado->fetch_array()){
    $sqlComentarios = "SELECT COUNT(comentarios.id_articulo) as comentarios FROM comentarios INNER JOIN articulo ON comentarios.id_articulo = articulo.id WHERE articulo.id =" . $row['id'] ." ";
    $comentarios = mysqli_query($db, $sqlComentarios);
    $nuComentarios = mysqli_fetch_assoc($comentarios);  

    if($i == 0){
        echo "<div class='carousel-item active'>";
    }else if($i % 3 == 0){
        echo "<div class='carousel-item'>";
    }
    echo "
<div class='col-md-4 about' style='float:left'>
    <div class='card' style='border-radius: 10px;' style='box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);'>
        <div class='card-header bg-boton'>
            <p class='card-text text-left text-white'>".$row['nombre']."<a
            style='float:right;'> Publicado</a></p>
        </div>
        <div class='d-flex align-self-end'>
            <img src='../../img/partidos/iconos/". $row['imagenPar'] ."' alt='' width='50px' height='50px'
                class='po'>
        </div>
        <div class='card-body'>
            <div class='d-flex justify-content-center'>

                <img src='../../img/candidatos/".$row['imagenCan']."' alt='' width='200px' height='200px'
                    class='text-center'>
            </div>
            <p class='card-text text-left mt-2'><Strong>Autor:</Strong> ".$row['nombreEsc']."</p>
            <div class='row mt-3'>
            <div class='col-md-6'>
                <div class='card'>
                    <div class='card-header co bg-boton'>Comentarios</div>
                    <div class='card-body co '>".$nuComentarios['comentarios']."</div>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='card'>
                    <div class='card-header co bg-boton'>Vistas</div>
                    <div class='card-body co'>".$row['no_vistas']."</div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

";
$i++;
if($i % 3 == 0){
    echo "</div>";
}
}
$temp = mysqli_query($db, $sql);
if($temp->fetch_array() == 0){
    echo "<div class='text-center'>
    <img src='../../img/escritor/vacio.png' alt=' ' width='350' height='350'
    class='text-center'>
    </div>";
    }else{
        echo "</div>";

    }
                    ?>
                    
                </div>
            </div>
        </div>
        <!--Fin Sección articulos publicados-->

        <div class="col-md-12">
            <hr />
        </div>

        <!--Sección candidatos-->
        <div class="row justify-content-md-center mt-5 about">
            <div class="col-md-6" style="text-align:center">
                <h2>Candidatos</h2>
            </div>
        </div>
        <!--Carousel-->
        <div class="col-md-12 ">
            <div class="mb-5">
                <div id="carruselCandidatos" class="carousel slide carousel-multi-item about" data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating" href="#carruselCandidatos" data-slide="prev"><i
                                class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#carruselCandidatos" data-slide="next"><i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <?php
                    
$sql = "SELECT id, CONCAT_WS(' ',nombre ,ap_paterno ,ap_materno) AS nombre, url_imagen , tipo_candidatura, distrito FROM candidato";
$resultado = mysqli_query($db, $sql);

$i = 0;

while($row = $resultado->fetch_array()){

    if($i == 0){
        echo "<div class='carousel-item active'>";
    }else if($i % 3 == 0){
        echo "<div class='carousel-item'>";
    }
    echo "
<div class='col-md-4 about' style='float:left'>
    <div class='card' style='border-radius: 10px;' style='box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);'>
        <div class='card-header bg-boton' >
            <p class='card-text text-left'>".$row['nombre']."</p>
        </div>
        <div class='card-body'>
            <div class='d-flex justify-content-center'>
                <img src='../../img/candidatos/".$row['url_imagen']."' alt='' width='200px' height='200px'
                    class='text-center'>
            </div>
            <p class='card-text text-left mt-2'><strong>Tipo candidatura:</strong> ".$row['tipo_candidatura']."</p>
            <p class='card-text text-left'><strong>Distrito:</strong> ".$row['distrito']."</p>
            <div class='row justify-content-center mt-2'>
            <div class='col-md-5' style='text-align:center'>
            <a class='btn btn-sm btn-info' href='../candidatos/registrar.php?id=".$row['id']."&operacion=editar'>Editar</a>
            </div>
            <div class='col-md-5' style='text-align:center'>
            <a class='btn btn-sm btn-danger' type='button' href='../candidatos/eliminar.php?id=".$row['id']."'>Eliminar</a>
            </div>

        </div>
        </div>
    </div>
</div>

";
$i++;
if($i % 3 == 0){
    echo "</div>";
}
}
$temp = mysqli_query($db, $sql);
if($temp->fetch_array() == 0){
    echo "<div class='text-center'>
    <img src='../../img/escritor/vacio.png' alt=' ' width='350' height='350'
    class='text-center'>
    </div>";
    }else{
        echo "</div>";

    }
                    ?>
                      
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr />
            </div>
            <!--Fin Sección candidatos-->

            <!--Sección escritores-->
            <div class="row justify-content-md-center mt-5 about">
                <div class="col-md-6" style="text-align:center">
                    <h2>Escritores</h2>
                </div>
            </div>
            <!--Carousel -->
            <div class="col-md-12 ">
                <div class="mb-5">
                    <div id="carruselEscritores" class="carousel slide carousel-multi-item about" data-ride="carousel">

                        <!--Controls-->
                        <div class="controls-top">
                            <a class="btn-floating" href="#carruselEscritores" data-slide="prev"><i
                                    class="fas fa-chevron-left"></i></a>
                            <a class="btn-floating" href="#carruselEscritores" data-slide="next"><i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                        <!--/.Controls-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <?php
                    
$sql = "SELECT id, acerca_de, CONCAT_WS(' ',nombre ,ap_paterno ,ap_materno) AS nombre, url_imagen , empleo, organizacion FROM escritor";
$resultado = mysqli_query($db, $sql);

$i = 0;

while($row = $resultado->fetch_array()){

    if($i == 0){
        echo "<div class='carousel-item active'>";
    }else if($i % 3 == 0){
        echo "<div class='carousel-item'>";
    }
    echo "
<div class='col-md-4 about' style='float:left'>
    <div class='card' style='border-radius: 10px;' style='box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);'>
        <div class='card-header bg-boton'>
            <p class='card-text text-left'>".$row['nombre']."</p>
        </div>
        <div class='card-body'>
            <div class='d-flex justify-content-center'>
                <img src='../../img/autores/".$row['url_imagen']."' alt='' width='200px' height='200px'
                    class='text-center'>
            </div>
            <p class='card-text text-left mt-2'><strong>Empleo:</strong> ".$row['empleo']."</p>
            <p class='card-text text-left'><strong>Organización:</strong> ".$row['organizacion']."</p>
            <p class='card-text text-left'><strong>Acerca de: </strong></p>
            <textarea class='form-control' name='articulo' rows='4'
                                style='width:100%; height:100%' readonly>".$row['acerca_de']."</textarea>
        </div>
    </div>
</div>

";
$i++;
if($i % 3 == 0){
    echo "</div>";
}
}
$temp = mysqli_query($db, $sql);
if($temp->fetch_array() == 0){
    echo "<div class='text-center'>
    <img src='../../img/escritor/vacio.png' alt=' ' width='350' height='350'
    class='text-center'>
    </div>";
    }else{
        echo "</div>";

    }
                    ?>
                           
                        </div>
                    </div>
                </div>
                <!--Fin Sección escritores-->
                <div class="mb-5">
                    <br>
                </div>
            </div>
            <?php
require_once(realpath(dirname(__FILE__) . "../../includes/footer.php"));
?>