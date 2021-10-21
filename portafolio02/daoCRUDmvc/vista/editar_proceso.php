<?php //Proceso actualizacion de datos del usuario
    //print_r($_POST);
    if (!isset($_POST['oculto'])) {
        //exit();
        header("Location: index.php");
    }
    include '../modelo/conexion.php';
    $E_id_cliente = $_POST['E_id_cliente'];
    $E_num_documento = $_POST['E_num_documento'];
    $E_nombre = $_POST['E_nombre'];
    $E_segundo_nombre = $_POST['E_segundo_nombre'];
    $E_apellido1 = $_POST['E_apellido1'];
    $E_apellido2 = $_POST['E_apellido2'];
    $E_correo = $_POST['E_correo'];
    $E_contraseña = $_POST['E_contraseña'];

    $sentencia = $bd->prepare("UPDATE clientes SET num_documento= ?,
                                                    nombre= ?,
                                                    segundo_nombre= ?,
                                                    apellido1= ?,
                                                    apellido2= ?,
                                                    correo= ?,
                                                    contraseña= ?
                                WHERE id_cliente = ?; ");
    $resultado = $sentencia->execute([$E_num_documento,$E_nombre,$E_segundo_nombre,$E_apellido1,$E_apellido2,
                                    $E_correo,$E_contraseña,$E_id_cliente]);
    
    if ($resultado === TRUE) {
        //echo "<strong><h2>Los datos del usuario han sido actualizados exitosamente!!!</h2></strong>";
        header("Location: index.php");
    } else {
        echo "<h2>Ups! ocurrio un error al actualizar los datos del usuario</h2>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización Usuario</title>
    <link rel="stylesheet" href="../estilos/css.css">
</head>
<body>
    
</body>
</html>