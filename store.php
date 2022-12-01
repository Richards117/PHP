<?php

    include('conexion.php');

    if(count($_POST) > 0){
        $titulo = $_POST['nombre'];
        $autor = $_POST['modelo'];
        $editorial = $_POST['marca'];
        $tipo = $_POST['tipo'];
        $formato = $_POST['formato'];

        $sql = "INSERT INTO datos (nombre, modelo, marca,tipo, formato) VALUES('$titulo', '$autor', '$editorial', '$tipo', '$formato')";

        $conn->exec($sql);

        header("Location: index.php");
    }
?>