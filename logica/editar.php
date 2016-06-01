<?php
function mostrarPerfil() {
	// Muestro los datos del usuario que están guardados en sesión. 
	$usuario = $_SESSION ['usuario'] ['nombre'];
	$avatar = $_SESSION ['usuario'] ['avatar'];
	 
	echo '
		<form method="post" class="editar" enctype="multipart/form-data">
		  <div class="mdl-card centro mdl-cell mdl-cell--12-col">
			<img class="avatarPerfil" src="images/usuarios/' . $avatar . '">
			<div class="mdl-cell file mdl-cell--12-col">
			 	<input class="input__field input__field--efecto" type="file" id="avatar" name="avatar">
			</div>
		  </div>		
						
			<div class="mdl-card__supporting-text" style="height: 130px;">	
				<div class="mdl-card mdl-cell mdl-cell--6-col inputUser ">
					<span class="input input--efecto">
					 <input class="input__field input__field--efecto" type="text" id="usuario" name="usuario">
					 	<label class="input__label input__label--efecto" for="usuario">
					 	 <span class="input__label-content input__label-content--efecto usuario">' . $usuario . '</span>
						</label>
			 <svg class="graphic graphic--efecto" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
				<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
				<path d="M0,2.5c0,0,298.666,0,399.333,0C448.336,2.5,513.994,13,597,13c77.327,0,135-10.5,200.999-10.5c95.996,0,402.001,0,402.001,0"></path>
			</svg>
					</span>
				</div>
						  		
			</div>			  		
		  ';
}
function guardarPerfil() {
	/* Guardo los datos del perfil se hayan modificado o no, en el caso de no haberse modificado
	 * los recojo de la sesión.
	 */
	$conexion = new conexion ();
	$conn = $conexion->conectar ();
	
	if (isset ( $_POST ['guardar'] )) {
		$idUser = $_SESSION ['usuario'] ['id'];
		$rePassword = $_POST ['rePassword'];
		$src = "images/usuarios/";
		
		//Si se ha modificado el avatar recogemos los nuevos datos, sino recogemos el avatar que hay en sesión.
		if (isset($_FILES['avatar']['name']) && !empty($_FILES['avatar']['name'])){
			$path = $src . $_FILES['avatar']['name'];
			if (move_uploaded_file ( $_FILES ['avatar'] ['tmp_name'], $path )){
				$_SESSION['usuario']['avatar'] = $_FILES['avatar']['name'];
				$avatar = $_FILES['avatar']['name'];
				chmod ( $path, 0777 );
			}
		} else {
			$avatar = $_SESSION['usuario']['avatar'];
		}
		
		//Si se ha modificado el usuario recogemos los nuevos datos, sino recogemos el usuario que hay en sesión.
		if (empty ( $_POST ['usuario'] )){
			$nombre = $_SESSION ['usuario'] ['nombre'];
		} else{
			$_SESSION['usuario']['nombre'] = $_POST ['usuario'];
			$nombre = $_POST ['usuario'];
		}
		
		/*Si se ha modificado la password recogemos los nuevos datos y los encriptamos, sino recogemos la
			password que hay en sesión que ya está encriptada.
		*/
		if (empty($_POST ['password'] )){
			$password = $_SESSION ['usuario'] ['password'];
			$mdPass = $password;
		} else{
			$_SESSION['usuario']['password'] = $_POST ['password'];
			$password = $_POST ['password'];
			$mdPass = md5($password);
		}
		
			
		$sql = ("UPDATE usuarios SET nombre = '" . $nombre . "' , password = '" . $mdPass . "', avatar = '" . $avatar . "'  WHERE id = '" . $idUser . "'");
		$cons = $conexion->ejecutar_consulta ( $sql );
		
		echo '<b>Los datos se han guardado correctamente.</b>';
	}
}

?>