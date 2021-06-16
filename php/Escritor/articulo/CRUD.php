<?php

 $operacion = $_POST["operacion"];

 $serv = "localhost";
 $usr = "root";
 $pwd = "";
 $nomBD = "examen-u5";
 $db = mysqli_connect($serv, $usr, $pwd, $nomBD);
 if(!$db){
     die("La conexión fallo: " . mysqli_connect_error());
 }

 if($operacion == "crear"){
    $opcion = $_POST["opcion"];
    $idCandidato = $_POST["idC"];
    $idEscritor = $_POST["idEscritor"];
    $articulo = $_POST["articulo"];

    if($opcion == "publicar"){
        $query = "INSERT INTO articulo (id, id_escritor, id_candidato, articulo, estatus, no_vistas)  values ('','$idEscritor', '$idCandidato',  '$articulo', 'publicado', 0)";
        $result = mysqli_query($db,$query);

    }else{
        $query = "INSERT INTO articulo (id, id_escritor, id_candidato, articulo, estatus, no_vistas)  values ('','$idEscritor', $idCandidato,  '$articulo', 'guardado', 0)";
        $result = mysqli_query($db,$query);
    }
    header("location: ../home.php");

 }

 if($operacion == "publicar"){
    $id = $_POST["id"];
        $query = "UPDATE articulo SET estatus = 'publicado' WHERE id= ".$id."";
        $result = mysqli_query($db,$query);
        header("location: ../home.php");

 }
 
 if($operacion == "eliminar"){
    $id = $_POST["id"];
    echo $id;
        $query = "DELETE FROM articulo  WHERE id= ".$id."";
        $result = mysqli_query($db,$query);
        header("location: ../home.php");

 }
?>