<?php
    //print_r($_GET);
    if (!isset($_GET['id_cliente'])) {
        //exit();
        header("Location: index.php");
    }

    include '../modelo/conexion.php';
    $id_cliente = $_GET['id_cliente'];

    $sentencia = $bd->prepare("SELECT * FROM clientes WHERE id_cliente = ?;");
    $sentencia->execute([$id_cliente]);
    $cliente = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($cliente);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../estilos/css.css">
</head>
<body>
    <center>
        <h2>Editar cliente</h2>
        <form method="POST" action="editar_proceso.php">
                <table>
                    <tr>
                        <td>Numero de documento </td>
                        <td><input type="text" name="E_num_documento" value="<?php echo $cliente->num_documento?>"></td>
                    </tr>
                    <tr>
                        <td>Nombre </td>
                        <td><input type="text" name="E_nombre" value="<?php echo $cliente->nombre?>"></td>
                    </tr>
                    <tr>
                        <td>Segundo Nombre </td>
                        <td><input type="text" name="E_segundo_nombre" value="<?php echo $cliente->segundo_nombre?>"></td>
                    </tr>
                    <tr>
                        <td>Primer Apellido </td>
                        <td><input type="text" name="E_apellido1" value="<?php echo $cliente->apellido1?>"></td>
                    </tr>
                    <tr>
                        <td>Segundo Apellido </td>
                        <td><input type="text" name="E_apellido2" value="<?php echo $cliente->apellido2?>"></td>
                    </tr>
                    <tr>
                    <td>Correo </td>
                        <td><input type="text" name="E_correo" value="<?php echo $cliente->correo?>"></td>
                    </tr>
                    <tr>
                        <td>Contraseña </td>
                        <td><input type="password" name="E_contraseña" value="<?php echo $cliente->contraseña?>"></td>
                    </tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="E_id_cliente" value="<?php echo $cliente->id_cliente ?>">
                    <tr>
                        <td><input type="reset" id="reset"></td>
                        <td><input type="submit" value="Registrar Datos" id="enviar"></td>
                    </tr>
                </table>
            </form>
    </center>
</body>
</html>