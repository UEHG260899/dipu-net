<?php
require_once(realpath(dirname(__FILE__) . "../../includes/navbar_escritor.php"));

    if(!$conn){
        die("La conexión fallo: " . mysqli_connect_error());
    }else{
        $sqlEscritor = "SELECT * FROM escritor WHERE id_usuario = ".$_SESSION['usuario']['id'] ." ";
        $idEscritor = mysqli_query($conn, $sqlEscritor);
        $id = mysqli_fetch_assoc($idEscritor);

        $sqlPublicados = "SELECT COUNT(id_escritor) AS publicados FROM articulo WHERE id_escritor = " . $id['id'] ." AND estatus = 'publicado'";
        $publicados = mysqli_query($conn, $sqlPublicados);
        $nuPublicados = mysqli_fetch_assoc($publicados);  
        
        $sqlArticulos = "SELECT COUNT(id_escritor) AS articulos FROM articulo WHERE id_escritor = " . $escritor['id'] ." ";
        $articulos = mysqli_query($conn, $sqlArticulos);
        $nuArticulos = mysqli_fetch_assoc($articulos);  

        $sqlComentarios = "SELECT COUNT(comentarios.id_articulo) as comentarios FROM comentarios INNER JOIN articulo ON comentarios.id_articulo = articulo.id WHERE articulo.id_escritor =" . $escritor['id'] ." ";
        $comentarios = mysqli_query($conn, $sqlComentarios);
        $nuComentarios = mysqli_fetch_assoc($comentarios);  
    }

?>
<link rel="stylesheet" href="<?php echo $root . "/css/escritor/estilos.css"; ?>">
<div class="container mb-5">
    <div class="col-12 mt-5" style="text-align:right">
        <img src="../../img/<?php echo $id['url_imagen']; ?>" alt="" width="65px" height="65px" class="text-center mt-4 rightToLeft">
    </div>
    <!--Sección escritor-->
    <div class="row justify-content-md-center mb-3 about">
        <div class="col-md-4" style="text-align:center">
            <h2>Escritor</h2>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card leftToRight" style="border-radius: 10px;" >
                <div class="card-header bg-boton">
                    <p class="card-text text-center">Artículos Publicados</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center"><?php echo $nuPublicados['publicados']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card about"  style="border-radius: 10px;">
                <div class="card-header bg-boton">
                    <p class="card-text text-center">Artículos Escritos</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center"><?php echo $nuArticulos['articulos']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card rightToLeft" style="border-radius: 10px;">
                <div class="card-header bg-boton">
                    <p class="card-text text-center">Número de comentarios</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center"><?php echo $nuComentarios['comentarios']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Sección escritor-->
    <div class="col-md-12">
        <hr />
    </div>
    <!--Sección articulos publicados-->
    <div class="row justify-content-md-center mt-5 about">
        <div class="col-md-6" style="text-align:center">
            <h2>Artículos publicados por usted</h2>
        </div>
    </div>
    <!--Carousel-->
    <div class="col-md-12 ">
        <div class="mb-5">
            <div id="multi-item-example" class="carousel slide carousel-multi-item about" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                            class="fas fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                
                <div class="carousel-inner" role="listbox">

                    <?php
                    
$sql = "SELECT articulo.no_vistas,articulo.id, CONCAT_WS(' ',candidato.nombre ,candidato.ap_paterno ,candidato.ap_materno) AS nombre, candidato.url_imagen as imagenCan, partidos.url_imagen as imagenPar FROM articulo INNER JOIN candidato ON candidato.id = articulo.id_candidato INNER JOIN partidos ON candidato.id_partido = partidos.id WHERE articulo.id_escritor = " . $escritor['id'] ." AND articulo.estatus = 'publicado'";
$resultado = mysqli_query($conn, $sql);

$i = 0;

while($row = $resultado->fetch_array()){
    $sqlComentarios = "SELECT COUNT(comentarios.id_articulo) as comentarios FROM comentarios INNER JOIN articulo ON comentarios.id_articulo = articulo.id WHERE articulo.id =" . $row['id'] ." ";
    $comentarios = mysqli_query($conn, $sqlComentarios);
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
            style='float:right'> Publicado</a></p>
        </div>
        <div class='d-flex align-self-end'>
            <img src='../../img/partidos/iconos/". $row['imagenPar'] ."' alt='' width='50px' height='50px'
                class='po'>
        </div>
        <div class='card-body'>
            <div class='d-flex justify-content-center'>

                <img src='../../img/".$row['imagenCan']."' alt='' width='200px' height='200px'
                    class='text-center'>
            </div>
            <div class='row mt-3'>
            <div class='col-md-6'>
                <div class='card'>
                    <div class='card-header co bg-boton'>Comentarios</div>
                    <div class='card-body co'>".$nuComentarios['comentarios']."</div>
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
$temp = mysqli_query($conn, $sql);
if($temp->fetch_array() == 0){
    echo "<div class='text-center'>
    <img src='../../img/escritor/vacio.png' alt=' ' width='350' height='350'
    class='text-center'>
    </div>";
    }else{
        echo "</div>";

    }
                    ?>
                    <!--First slide-->
                </div>
            </div>
        </div>
        <!--Fin Sección articulos publicados-->
        <!--Sección articulos guardados-->
        <div class="col-md-12">
            <hr />
        </div>
        

        <div class="row justify-content-md-center justify-content-sm-center mt-5">
            <div class="col-md-6 col-sm-8" style="text-align:center">
                <h2>Artículos guardados</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-4" style="text-align:left">
                <a class="btn btn-sm btn-primary" href="articulo/crear.php">Crear Artículo</a>
            </div>
        </div>
        <div class="mb-5">
            <div id="guardadosCarrusel" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#guardadosCarrusel" data-slide="prev"><i
                            class="fas fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#guardadosCarrusel" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                
                <div class="carousel-inner" role="listbox">

                    
                    <?php
                    
$sql = "SELECT articulo.id, CONCAT_WS(' ',candidato.nombre ,candidato.ap_paterno ,candidato.ap_materno) AS nombre, candidato.url_imagen as imagenCan, partidos.url_imagen as imagenPar FROM articulo INNER JOIN candidato ON candidato.id = articulo.id_candidato INNER JOIN partidos ON candidato.id_partido = partidos.id WHERE articulo.id_escritor = " . $escritor['id'] ." AND articulo.estatus = 'guardado'";
$resultado = mysqli_query($conn, $sql);

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
            <p class='card-text text-left text-white'>".$row['nombre']."<a
            style='float:right'> Guardado</a></p>
        </div>
        <div class='d-flex align-self-end'>
            <img src='../../img/partidos/iconos/". $row['imagenPar'] ."' alt='' width='50px' height='50px'
                class='po'>
        </div>
        <div class='card-body'>
            <div class='d-flex justify-content-center'>

                <img src='../../img/".$row['imagenCan']."' alt='' width='200px' height='200px'
                    class='text-center'>
            </div>
            <div class='row justify-content-center mt-3'>
            <div class='col-md-12' style='text-align:center'>
                <button class='btn btn-sm btn-success' type='button' onclick='getArticulo(".$row['id'].")'>Publicar artículo</button>
            </div>
        </div>
        <div class='row justify-content-center mt-2'>
            <div class='col-md-5' style='text-align:center'>
            <a class='btn btn-sm btn-info' href='Edit_noPublicado.php?idEditar=".$row['id']."' >Actualizar</a>
            </div>
            <div class='col-md-5' style='text-align:center'>
            <button class='btn btn-sm btn-danger' type='button' onclick='EliminarArticulo(".$row['id'].")'>Eliminar artículo</button>
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
$temp = mysqli_query($conn, $sql);
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
        <!--Fin Sección articulos guardados-->
        <div class="mb-5">
            <br>
        </div>
        <!--Seccion modal-->
        <button type="button" id="AbrirModalP" class="btn btn-info btn-lg" data-toggle="modal"
            data-target="#modalPublicar" hidden></button>

        <button type="button" id="AbrirModalE" class="btn btn-info btn-lg" data-toggle="modal"
            data-target="#modalEliminar" hidden></button>
        <div id="publicar" class="row">

        </div>
        <div id="eliminar" class="row">

        </div>

        <!--Sección seleccion candidato-->
        <div class="col-md-12">
            <hr />
        </div>
        <div class="row justify-content-md-center mt-5">
            <div class="col-md-4" style="text-align:center">
                <h2>Búsqueda de artículos no publicados</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4" style="text-align:left">
                <div class="form-group">
                    <label>Buscar</label>
                    <div class="input-group ">
                        <input type="text" class="form-control" id="busca" placeholder="Ingrese nombre">
                        <div class="input-group-append disabled">
                            <button class="btn bg-boton" type="submit" name="submit"
                                onclick="mostrarCandidatos($('#busca').val())"><span><i
                                        class="fa fa-search"></i></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-5">
                    <div id="carruselBusqueda" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!--Controls-->
                        <div class="controls-top">
                            <a class="btn-floating" href="#carruselBusqueda" data-slide="prev"><i
                                    class="fas fa-chevron-left"></i></a>
                            <a class="btn-floating" href="#carruselBusqueda" data-slide="next"><i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                        <!--/.Controls-->


                        <div class="carousel-inner" role="listbox">
                            
                            <div id="candidatos"></div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Fin Sección seleccion candidato-->
    </div>

    <?php
require_once(realpath(dirname(__FILE__) . "../../includes/footer.php"));
?>
    <script src="<?php echo $root . "/js/escritor/home.js"; ?>"></script>
