<?php


$candidato = $_REQUEST["candidato"];

$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "examen-u5";

$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

if (!$db) {
    
    die("La conexión fallo: ". mysqli_connect_error());
}
else{
    
    $sql = "SELECT CONCAT_WS(' ',c.nombre ,c.ap_paterno ,c.ap_materno) as candidato
                   ,CONCAT_WS(' ',e.nombre , e.ap_paterno , e.ap_materno) as escritor                
                FROM articulo a INNER JOIN escritor e ON a.id_escritor = e.id
                                INNER JOIN candidato c ON a.id_candidato = c.id  
                WHERE estatus = 'Publicado' AND c.nombre  like '$candidato%'";

    $resultadoConsulta = mysqli_query($db, $sql);  
    $contador = 0;
    while($articulo = mysqli_fetch_array($resultadoConsulta)){
        $contador = $contador + 1;
        echo '
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
                <div class="d-flex justify-content-between">
                    <p class="my-1 ml-3"> ' . $articulo['candidato']. '</p>
                    <img src="../../img/partidos/iconos/pan.png" alt="" width="50px" height="50px">
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">

                        <img src="../../img/avatar.png" alt="" width="200px" height="200px" class="text-center">
                    </div>

                    <p class="card-text text-right">' . $articulo['escritor'] .'</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-info">Ver más tarde</button>
                        <button class="btn bg-boton">Ver articulo completo</button>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
    
    if($contador == 0){
        echo '
            <div class="col-md-4 offset-md-4">
                <img src="../../img/articulos/sinArticulos.png" width="300px" height="300px"  alt="Sin resultados">
            </div>';

    }
        
}

?>