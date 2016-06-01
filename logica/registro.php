<?php

function registrar(){
	/* Se comprueba que el nombre de usuario no existe en la base de datos y de ser así se recogen los datos
	 *  y se insertan en la base de datos.
	 */
	if (isset($_POST['registrar'])) {
		$conexion = new conexion();
		$conn = $conexion->conectar();
		$nombre = $_POST['usuario'];
	
		$sql = "SELECT * FROM usuarios where nombre ='" . $nombre . "'";
		$cons = $conexion->ejecutar_consulta($sql);
	
		if (mysqli_num_rows($cons) == 0) {
			$nombre = $_POST["usuario"];
			$password = $_POST["password"];
			$passEncriptada = md5($password);
			$email = $_POST["email"];
			$avatar = "usuarioAnonimo.jpg";
			$tipo = "1";
	
			$sql2 = "INSERT INTO usuarios (nombre,password,avatar,tipo,email) VALUES ('$nombre','$passEncriptada','$avatar','$tipo','$email')";
			$cons2 = $conexion->ejecutar_consulta($sql2);
	
			echo '<b>Enhorabuena! Se ha registrado correctamente.</b>';
	
		} else {
			echo '<b>El nombre de usuario ya existe.</b>';
		}
	}
}
?>