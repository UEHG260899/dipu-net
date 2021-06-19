<?php

$idProceso = $_REQUEST["idProceso"];

$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "examen-u5";

if($idProceso == 1){

    
    
    $db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);
    
    if (!$db) {
        
        die("La conexión fallo: ". mysqli_connect_error());
    }
    else{
    
        $sql = "SELECT CONCAT_WS(' ',c.nombre ,c.ap_paterno ,c.ap_materno) as candidato
                       ,CONCAT_WS(' ',e.nombre , e.ap_paterno , e.ap_materno) as escritor
                       ,a.id as id_articulo
                       ,a.id_candidato as id_candidato 
                       ,p.url_imagen as img_partido
                       ,c.url_imagen as img_candidato                   
                    FROM articulo a INNER JOIN escritor e ON a.id_escritor = e.id
                                    INNER JOIN candidato c ON a.id_candidato = c.id
                                    INNER JOIN partidos p ON c.id_partido = p.id     
                    WHERE estatus = 'Publicado'";
    
        $resultadoConsulta = mysqli_query($db, $sql);  
        
            
    }

}
else{

    $gradoAcademico = $_REQUEST["gradoAcademico"];
    $rangoEdad = $_REQUEST["rangoEdad"];
    $partido = $_REQUEST["partido"];
    $sexo = $_REQUEST["sexo"];

    $filtroEdad = "";
    $db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);
    
    if (!$db) {
        
        die("La conexión fallo: ". mysqli_connect_error());
    }
    else{
    
        if($gradoAcademico == "cualquiera"){
            $gradoAcademico = "";
        }
        
    
        
    
        if($sexo == "ambos"){
            $sexo = "";
        }
    
        if($partido == "todos"){
            $partido = "";
        }

        switch($rangoEdad)
        {
            case "1":
                $filtroEdad = "TIMESTAMPDIFF(YEAR, c.fecha_nacimiento, CURDATE())>=18";
                break;
            case "2":
                $filtroEdad = "TIMESTAMPDIFF(YEAR, c.fecha_nacimiento, CURDATE())>=18 AND TIMESTAMPDIFF(YEAR, c.fecha_nacimiento, CURDATE())<=29";
                break;
            case "3":
                $filtroEdad = "TIMESTAMPDIFF(YEAR, c.fecha_nacimiento, CURDATE())>=30 AND TIMESTAMPDIFF(YEAR, c.fecha_nacimiento, CURDATE())<=39";
                break;
            case "4":
                $filtroEdad = "TIMESTAMPDIFF(YEAR, c.fecha_nacimiento, CURDATE())>=40 AND TIMESTAMPDIFF(YEAR, c.fecha_nacimiento, CURDATE())<=49";
                break; 
            case "5":
                $filtroEdad = "TIMESTAMPDIFF(YEAR, c.fecha_nacimiento, CURDATE())>=50 AND TIMESTAMPDIFF(YEAR, c.fecha_nacimiento, CURDATE())<=59";
                break;
            case "6":
                $filtroEdad = "TIMESTAMPDIFF(YEAR, c.fecha_nacimiento, CURDATE())<=60";
                break;                    
        }
        
        $sql = "SELECT CONCAT_WS(' ',c.nombre ,c.ap_paterno ,c.ap_materno) as candidato
                       ,CONCAT_WS(' ',e.nombre , e.ap_paterno , e.ap_materno) as escritor  
                       ,a.id as id_articulo
                       ,a.id_candidato as id_candidato 
                       ,p.url_imagen as img_partido
                       ,c.url_imagen as img_candidato                  
                    FROM articulo a INNER JOIN escritor e ON a.id_escritor = e.id
                                    INNER JOIN candidato c ON a.id_candidato = c.id  
                                    INNER JOIN partidos p ON c.id_partido = p.id  
                    WHERE estatus = 'Publicado' AND c.genero  like '$sexo%'
                                                AND $filtroEdad                         
                                                AND p.nombre_corto  like '$partido%'                           
                                                AND c.carrera  like '$gradoAcademico%'";
    
        $resultadoConsulta = mysqli_query($db, $sql);  
        
            
    }
}

$contador = 0;
while($articulo = mysqli_fetch_array($resultadoConsulta)){
    $contador = $contador + 1;
    echo '
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card about">
            <div class="d-flex justify-content-between">
                <p class="my-1 ml-3"> ' . $articulo['candidato']. '</p>
                <img src="../../img/partidos/iconos/'.$articulo['img_partido'].'" alt="" width="50px" height="50px">
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-center">

                    <img src="../../img/candidatos/'.$articulo['img_candidato'].'" alt="" width="200px" height="200px" class="text-center">
                </div>

                <p class="card-text text-right">' . $articulo['escritor'] .'</p>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-info btnMasTarde"  dataId=' .$articulo['id_articulo'] .'>Ver más tarde</button>
                    <button class="btn bg-boton btnVerCompleto"  dataId='.$articulo['id_articulo'].'>Ver articulo completo</button>
                </div>
            </div>
        </div>
    </div>
    ';
}

if($contador == 0){
    echo '
        <div class="col-md-4 offset-md-4 about">
            <img src="../../img/articulos/sinArticulos.png" width="300px" height="300px"  alt="Sin resultados">
        </div>';

}


?>