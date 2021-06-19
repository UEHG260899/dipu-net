<?php

$opc = $_POST["opc"];

$serv = "localhost";
$usr = "root";
$pwd = "";
$nomBD = "examen-u5";
$db = mysqli_connect($serv, $usr, $pwd, $nomBD);
if (!$db) {
    die("La conexión fallo: " . mysqli_connect_error());
}

switch ($opc) {
    case "registrar":

        $nombre = $_POST["nombreCan"];
        $apPat = $_POST["apPatCan"];
        $apMat = $_POST["apMatCan"];
        $genero = $_POST["generoCan"];
        $estado = $_POST["estadoCan"];
        $municipio = $_POST["municipioCan"];
        $nacimiento = $_POST["nacimientoCan"];
        $img = $_POST["imgCan"];
        $partido = $_POST["partidoCan"];
        $tipo = $_POST["tipoCan"];
        $distrito = $_POST["distritoCan"];
        $grado = $_POST["gradoCan"];
        $escuela = $_POST["institucionCan"];
        $puesto = $_POST["puestoCan"];

        $sql = "INSERT INTO candidato (id, nombre, ap_paterno, ap_materno, genero, fecha_nacimiento, estado, municipio, url_imagen, carrera, escuela, puesto_actual, id_partido, tipo_candidatura, distrito)
         VALUES                         (NULL, '$nombre', '$apPat', '$apMat', '$genero', '$nacimiento', '$estado', '$municipio', '$img', '$grado', '$escuela', '$puesto', '$partido', '$tipo', '$distrito');";
        if (mysqli_query($db, $sql)) {
            echo json_encode(array('msg' => "Nuevo Corredor creado exitosamente"));
        } else {
            $msg = "Error: " . $sql . ":" . mysqli_error($db);
            echo json_encode(array('msg' => $msg));
        }
        header("location: ../Administrador/home.php");

        break;

    case "editar":
        $id = $_POST["id"];

        $nombre = $_POST["nombreCan"];
        $apPat = $_POST["apPatCan"];
        $apMat = $_POST["apMatCan"];
        $genero = $_POST["generoCan"];
        $estado = $_POST["estadoCan"];
        $municipio = $_POST["municipioCan"];
        $nacimiento = $_POST["nacimientoCan"];
        $img = $_POST["imgCan"];
        $partido = $_POST["partidoCan"];
        $tipo = $_POST["tipoCan"];
        $distrito = $_POST["distritoCan"];
        $grado = $_POST["gradoCan"];
        $escuela = $_POST["institucionCan"];
        $puesto = $_POST["puestoCan"];

        $sql = "UPDATE candidato 
                SET nombre = '$nombre', 
                    ap_paterno = '$apPat', 
                    ap_materno = '$apMat', 
                    genero = '$genero', 
                    fecha_nacimiento = '$nacimiento', 
                    estado = '$estado', 
                    municipio = '$municipio', 
                    url_imagen = '$img', 
                    carrera = '$grado', 
                    escuela = '$escuela', 
                    puesto_actual = '$puesto', 
                    id_partido = '$partido', 
                    tipo_candidatura = '$tipo', 
                    distrito = '$distrito' 
                WHERE candidato.id = $id;";
        if (mysqli_query($db, $sql)) {
            echo json_encode(array('msg' => "Nuevo Corredor creado exitosamente"));
        } else {
            $msg = "Error: " . $sql . ":" . mysqli_error($db);
            echo json_encode(array('msg' => $msg));
        }
        header("location: ../Administrador/home.php");

        break;


    case "leer":

        $id = $_POST["id"];
        $result = mysqli_query($db, "SELECT * FROM candidato WHERE id = $id");
        $json_array = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $json_array = $row;
        }
        echo (json_encode($json_array));
        header("location: ../Administrador/home.php");
        break;


    case "borrar":

        $id = $_POST["id"];
        $query = "DELETE FROM candidato  WHERE id= " . $id . "";
        $result = mysqli_query($db, $query);
        header("location: ../Administrador/home.php");
        break;
}
