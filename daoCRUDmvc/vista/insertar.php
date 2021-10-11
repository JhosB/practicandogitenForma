<?php
    //rectificar que se reguistren los datos
    //print_r($_POST);
    // if (!isset($_POST['oculto'])) {
    //     exit();
    // }

    include '../modelo/conexion.php';
    $num_documento = $_POST['num_documento'];
    $nombre = $_POST['nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];


    $sentencia = $bd->prepare("INSERT INTO clientes (num_documento,nombre,segundo_nombre,apellido1,apellido2,correo,contraseña) VALUES (?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$num_documento,$nombre,$segundo_nombre,$apellido1,$apellido2,$correo,$contraseña]);

    if ($resultado === TRUE) {
        //echo "<strong><h2>Los datos del usuario han sido ingresados exitosamente!!!</h2></strong>";
        header("Location: index.php");
    } else {
        echo "<h2>Ups! ocurrio un error al ingresar los datos del usuario</h2>";
    }
?>