<?php
    include '../modelo/conexion.php';
    $sentencia = $bd->query("SELECT * FROM clientes;");
    $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    /*fetchAll guardar en formato de objeto 
    FETCH_OBJ sea de tipo objeto*/
    //print_r($usuarios);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista y Registro de Clientes</title>
    <link rel="stylesheet" href="../estilos/css.css">
</head>
<body>
        <h1>Lista de Clientes</h1>
        <div id="main-container-tabla">
            <table>
                <thead>
                    <tr id="header">
                        <th>id_cliente</th>
                        <th>num_documento</th>
                        <th>nombre</th>
                        <th>segundo_nombre</th>
                        <th>apellido1</th>
                        <th>apellido2</th>
                        <th>correo</th>
                        <th>contraseña</th>
                    </tr>
                </thead>
                <?php
                    foreach ($usuarios as $dato) {
                        ?>
                        <tr>
                            <td><?php echo $dato->id_cliente; ?></td>
                            <td><?php echo $dato->num_documento; ?></td>
                            <td><?php echo $dato->nombre; ?></td>
                            <td><?php echo $dato->segundo_nombre; ?></td>
                            <td><?php echo $dato->apellido1; ?></td>
                            <td><?php echo $dato->apellido2; ?></td>
                            <td><?php echo $dato->correo; ?></td>
                            <td><?php echo $dato->contraseña; ?></td>
                            <td><a class="editar" href="editar.php?id_cliente=<?php echo $dato->id_cliente; ?>" id_cliente="editar">Editar</a></td>
                            <td><a class="eliminar" href="eliminar.php?id_cliente=<?php echo $dato->id_cliente; ?>" id_cliente="eliminar">Eliminar</a></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
        <!-- inicio insert -->
        <div id="main-container">
            <form method="POST" action="insertar.php">
            <h2>Ingresar Datos</h2>
                <table>
                    <tr>
                        <td>Numero de documento </td>
                            <td><input type="text" name="num_documento"></td>
                    </tr>
                    <tr>
                        <td>Nombre </td>
                        <td><input type="text" name="nombre"></td>
                    </tr>
                    <tr>
                        <td>Segundo Nombre </td>
                        <td><input type="text" name="segundo_nombre"></td>
                    </tr>
                    <tr>
                        <td>Primer Apellido </td>
                        <td><input type="text" name="apellido1"></td>
                    </tr>
                    <tr>
                        <td>Segundo Apellido </td>
                        <td><input type="text" name="apellido2"></td>
                    </tr>
                    <tr>
                    <td>Correo </td>
                        <td><input type="text" name="correo"></td>
                    </tr>
                    <tr>
                        <td>Contraseña </td>
                        <td><input type="password" name="contraseña"></td>
                    </tr>
                    <!-- <input type="hidden" name="oculto" value="1"> -->
                    <tr>
                        <td><input type="reset" id="reset"></td>
                        <td><input type="submit" value="Registrar Datos" id="enviar"></td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- fin del insert -->

</body>
</html>