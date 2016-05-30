<?php
function likes() {
	$conexion = new conexion ();
	$conn = $conexion->conectar ();
	$sql = "SELECT * FROM likes WHERE id_locales_likes=" . $_GET ["id"];
	$cons = $conexion->ejecutar_consulta ( $sql );
	$likes = mysqli_num_rows ( $cons );
	
	echo $likes;
}
function ofertas() {
	$conexion = new conexion ();
	$conn = $conexion->conectar ();
	
	$sql = "SELECT * FROM bebidas";
	$cons = $conexion->ejecutar_consulta ( $sql );
	
	while ( $row = mysqli_fetch_object ( $cons ) ) {
		$nombre = $row->nombre;
		$precio = $row->precio;
		
		echo '
			<li class="mdl-list__item mdl-list__item--two-line">
				<span class="mdl-list__item-primary-content">
					<i class="material-icons mdl-list__item-avatar">my_location</i>
					<span>' . $nombre . '</span>
				</span>
				<span class="mdl-list__item-secondary-content">' . $precio . ' € </span>
			</li>
			 ';
	}
}
function info() {
	$conexion = new conexion ();
	$conn = $conexion->conectar ();
	
	$sql = "SELECT contenido FROM locales WHERE id=" . $_GET ["id"];
	$cons = $conexion->ejecutar_consulta ( $sql );
	
	$row = mysqli_fetch_object ( $cons );
	
	$contenido = $row->contenido;
	
	echo $contenido;
}
function comentarios() {
	$conexion = new conexion ();
	$conn = $conexion->conectar ();
	
	$sql = "SELECT u.nombre as us_nombre, u.avatar, c.comentario
					FROM comentarios c INNER JOIN usuarios u ON c.id_usuarios = u.id 
					WHERE c.id_locales = ".$_GET['id'];
	
	$cons = $conexion->ejecutar_consulta ( $sql );
	
	while ( $row = mysqli_fetch_object ( $cons ) ) {
		$nombreUsuario = $row->us_nombre;
		$imagenUsuario = $row->avatar;
		$comentario = $row->comentario;
		$nombre = $row->loc_nombre;
		$nombreLink = str_replace ( ' ', '_', $nombre );
		
		echo '
			<header class="headerComent">
				<img src="images/usuarios/' . $imagenUsuario . '" class="avatarMsg">
					<div class="autor">
						<strong>' . $nombreUsuario . '</strong> <span>2 days ago</span>
					</div>
			</header>
			<div class="textoComent">' . $comentario . '</div><hr>
			';
	}
}


function enviarComentario(){
	 if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true){
		if (isset($_POST['enviar'])) {
			$conexion = new conexion();
			$conn = $conexion->conectar();
				
			$comentario = $_POST['comentario'];
			$idUsuario = $_SESSION ['usuario'] ['id'];
			$idLocal = $_GET['id'];
				
			$sql = "INSERT INTO comentarios (comentario,id_usuarios,id_locales) VALUES ('$comentario',$idUsuario,$idLocal)";
			$cons = $conexion->ejecutar_consulta($sql);
				
			$semaforo = '<a id="localGaleria" class="mdl-button mdl-js-button mdl-js-ripple-effect btnAviso"
										href="mensajes.php">Gracias por comentar, visita los mensajes aquí.</a>';
		}
	} else{
		$semaforo = '<a id="localGaleria" class="mdl-button mdl-js-button mdl-js-ripple-effect btnAviso"
										href="registro.php">Para escribir mensajes debes estar registrado</a>';
	}					
							echo '</form>';
							if (isset($_POST['enviar'])){
								echo $semaforo;
							}
}
?>