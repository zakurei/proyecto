<?php
	function login(){
		if (isset ( $_POST ['login'] )) {
			$conexion = new conexion ();
			$conn = $conexion->conectar ();
				
			$nombre = $_POST ['usuario'];
			$pass = $_POST ['password'];
				
			$sql = "SELECT * FROM usuarios where nombre ='$nombre'";
			$cons = $conexion->ejecutar_consulta ($sql);
				
			if (mysqli_num_rows($cons) == 0) {
				return "<b>El usuario " . $nombre . " no existe</b>";
			} else {
		
				$row = $cons->fetch_assoc ();
				$passEncriptadaLogin = md5 ( $pass );
				$passEncriptadaBD = $row ['password'];
		
				if ($passEncriptadaLogin != $passEncriptadaBD) {
					return "<b>Contraseña incorrecta.</b>";
				} else {
					$_SESSION ['logueado'] = true;
					$_SESSION ['usuario'] ['id'] = $row ['id'];
					$_SESSION ['usuario'] ['nombre'] = $row ['nombre'];
					$_SESSION ['usuario'] ['password'] = $row ['password'];
					$_SESSION ['usuario'] ['email'] = $row ['email'];
					$_SESSION ['usuario'] ['avatar'] = $row ['avatar'];
					$_SESSION ['usuario'] ['tipo'] = $row ['tipo'];
						
					header("Location: index.php");
				}
			}
		}
	}
?>