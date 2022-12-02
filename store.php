<?php

    include('conexion.php');

    if(count($_POST) > 0){
        $titulo = $_POST['nombre'];
        $autor = $_POST['modelo'];
        $editorial = $_POST['marca'];
       

        $sql = "INSERT INTO datos (nombre, modelo, marca,tipo, formato) VALUES('$nombre', '$modelo', '$marca'";

        $conn->exec($sql);

        header("Location: index.php");
    }
?>
