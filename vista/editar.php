<?php
session_start();
error_reporting();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
<div>
    <?php

    if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] != true) {
        header("Location: registro2.0.php");
    }

    include_once "../controladores/conexion.php";
    $conexion = new conexion();
    $conn = $conexion->conectar();

    if (isset($_POST['aceptar'])) {
        $archivo_origen = $_FILES['SelectImagen']['tmp_name'];
        $archivo_final = $_FILES['SelectImagen']['name'];

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $firma = $_POST['firma'];


        if (!empty ($_FILES['SelectImagen']['name'])) {
            move_uploaded_file($archivo_origen, $archivo_final);
            $_SESSION['usuario']['Avatar'] = $_FILES['SelectImagen']['name'];
        }

        if ($_POST['nombre'] != "" && $_POST['email'] != ""
            && $_POST['firma'] != ""
        ) {

            $sql2 = ("UPDATE usuario SET Nombre = '" . $_POST['nombre'] . "', Email = '" . $_POST['email'] . "', Firma = '" . $_POST['firma'] . "', Avatar = '" . $archivo_final . "' WHERE Login = " . $_SESSION['usuario']['Login']);
            $cons2 = $conexion->ejecutar_consulta($sql2);

            $_SESSION['usuario']['Nombre'] = $_POST['nombre'];
            $_SESSION['usuario']['Email'] = $_POST['email'];
            $_SESSION['usuario']['Firma'] = $_POST['firma'];

            echo "Los datos de la cuenta se han cambiado correctamente<br>";
        } else {
            print "No se permiten campos vacios.<br>";
        }


        $passOld = $_POST['passwordOld'];
        $passNew = $_POST['passwordNew'];
        $passNewRep = $_POST['passwordNewRep'];
        if ($passOld != "" && $passNew != "" && $passNewRep != "") {
            $passOld = md5($passOld);

            if (($passOld == $_SESSION['usuario']['Password']) && ($passNew == $passNewRep)) {
                $passNew = md5($passNew);

                $sql3 = ("UPDATE usuario SET Password = '" . $passNew . "' WHERE Login = " . $_SESSION['usuario']['Login']);
                $cons3 = $conexion->ejecutar_consulta($sql3);

                $_SESSION['usuario']['Password'] = $passNew;

                echo "La contraseña ha sido modificada correctamente.";

            } else {
                echo "Las contraseñas no coinciden.";
            }

        } else {
            echo "La contraseña no ha sido modificada.";
        }

    }
    ?>

    <?php
    include_once("menuPags.php");
    ?>
    <form method="post" class="editar" enctype="multipart/form-data">
        <div class="avisoeditar">Editar perfil</div>
        <div class="aviso2">Datos de la Cuenta</div>

        <div>
            <label>Usuario: <?php echo $_SESSION['usuario']['Login'] ?>
            </label>

        </div>
        <div>
            <label>Subir un nuevo avatar *</label><br>
            <input type="file" name="SelectImagen">

            <?php
            $avatar = $_SESSION['usuario']['Avatar'];
            echo '<img class="imagen" src="images/' . $avatar . '">';
            ?>

        </div>

        <div>
            <label>Nombre </label>
            <input id="nombre" name="nombre" type="text" value="<?php echo $_SESSION['usuario']['Nombre'] ?>">
        </div>

        <div>
            <label>Email </label>
            <input id="email" name="email" type="text" value="<?php echo $_SESSION['usuario']['Email'] ?>">
            </br>
            <p>(Es importante introducir una dirección de correo real.</p>
        </div>

        <div>
            <label>Firma personal </label>
            <input id="firma" name="firma" type="text" value="<?php echo $_SESSION['usuario']['Firma'] ?>">
            </br>
            <p>(La firma es su distintivo personal que se mostrará al pie de sus
                comentarios y mensajes)</p>
        </div>

        <div class="aviso2">Cambiar Contraseña</div>
        <div>
            <label>Contraseña Antigua </label>
            <input id="password" name="passwordOld" type="password">
        </div>
        <div>
            <label>Contraseña Nueva </label>
            <input id="password" name="passwordNew" type="password">
        </div>

        <div>
            <label>Repita Contraseña Nueva </label>
            <input id="password" name="passwordNewRep" type="password">
        </div>

        <div>
            <div class="botones">
            <button onclick="parent.location.href='editar2.0.php'">Cancelar</button>
            <input type="submit" name="aceptar" value="Aceptar">
                </div>
        </div>
    </form>
</body>
</html>
