<?php
function nombreTitulo(){
	//Tratamos los nombre ya que los recogemos con _ de la url y los nombres de las portadas de los locales no tienen espacio ni _.
	$nombre = $_GET["name"];
	$nombreImagen = str_replace('_', '', $nombre);
	$titulo= str_replace('_', ' ', $nombre);
	echo '
			<img id="fotoLocal" alt="local" src="images/galeriaLocales/'.$nombreImagen.'.jpg">
			<h3><b id="tituloLocal">'.$titulo.'</b></h3>
		';
}
function likes() {
	//Contamos la cantidad de votos que tiene cada local.
	$conexion = new conexion();
	$conn = $conexion->conectar();
	$sql = "SELECT * FROM likes WHERE id_locales_likes=" . $_GET ["id"];
	$cons = $conexion->ejecutar_consulta ( $sql );
	$likes = mysqli_num_rows ( $cons );
	
	echo $likes;
}
function votar(){
	/*Si existe la sesión (usuario logueado) y se pulsa el botón del voto miramos que ese usuario no haya votado ya
	 y de ser así insertamos el voto en la tabla, en caso contrario mostramos un mensaje para que vote en otro local */
	if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true){
		if (isset($_POST['voto'])) {
			$conexion = new conexion();
			$conn = $conexion->conectar();
			
			$idUsuario = $_SESSION['usuario']['id'];
			$idLocal = $_GET ["id"];
			
			$sql = "SELECT id FROM likes WHERE id_usuarios_likes = $idUsuario AND id_locales_likes = $idLocal AND estado = 'si'"; 
			$cons = $conexion->ejecutar_consulta($sql);
			
			if (mysqli_num_rows($cons) == 0) {
				$sql2 = "INSERT INTO likes (id_usuarios_likes,id_locales_likes,estado) VALUES ($idUsuario,$idLocal,'si')";
				$cons2 = $conexion->ejecutar_consulta($sql2);	
				
				return '<a id="localGaleria" class="mdl-button mdl-js-button mdl-js-ripple-effect btnAviso"
										href="#" style="color:red; cursor:not-allowed" disabled>Gracias por votar</a>';
				
			}else {
				return '<a id="localGaleria" class="mdl-button mdl-js-button mdl-js-ripple-effect btnAviso"
										href="seleccionLocal.php">Ya ha votado, visite otro local aquí</a>';
			}
		}
	} else {
		if (isset($_POST['voto'])) {
			return '<a id="localGaleria" class="mdl-button mdl-js-button mdl-js-ripple-effect btnAviso"
										href="registro.php">Debe estar registrado para votar</a>';
		}
		
	}
}
function ofertas() {
	// Se muestran los nombres y precios de las bebidas de los locales.
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
	/* Se muestra la información de los locales, recogiendo el id de cada local de la url
		a la que se lo habremos pasado al seleccionar un local en la lista de locales
	*/
	
	$conexion = new conexion ();
	$conn = $conexion->conectar ();
	
	$sql = "SELECT contenido FROM locales WHERE id=" . $_GET ["id"];
	$cons = $conexion->ejecutar_consulta ( $sql );
	
	$row = mysqli_fetch_object ( $cons );
	
	$contenido = $row->contenido;
	
	echo $contenido;
}
function comentarios() {
	// Muestra los comentarios de los usuarios con su nombre y avatar para cada local, recogiendo el id del local de la url.
	$conexion = new conexion ();
	$conn = $conexion->conectar ();
	
	$sql = "SELECT u.nombre as us_nombre, u.avatar, c.comentario
					FROM comentarios c INNER JOIN usuarios u ON c.id_usuarios = u.id 
					WHERE c.id_locales = ".$_GET['id'];
	
	$cons = $conexion->ejecutar_consulta ( $sql );
	
	while ( $row = mysqli_fetch_object($cons)) {
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
	// Inserta el comentario en la base de datos y muestra un mensajes
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