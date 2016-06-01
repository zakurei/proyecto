<?php
function mensajes(){
	$conexion = new conexion ();
	$conn = $conexion->conectar ();
	
	//Mostramos 10 comentarios aleatorios que se hayan hecho a los locales.
	$sql = "SELECT l.nombre as loc_nombre, u.nombre as us_nombre, u.avatar, c.id_locales as id_local, c.comentario
							FROM usuarios u
							JOIN comentarios c ON u.id = c.id_usuarios
							JOIN locales l ON c.id_locales = l.id
							ORDER BY RAND()
							LIMIT 10";
	$cons = $conexion->ejecutar_consulta ( $sql );
	
	while ( $row = mysqli_fetch_object ( $cons ) ) {
		$idLocal = $row->id_local;
		$nombreUsuario = $row->us_nombre;
		$imagenUsuario = $row->avatar;
		$comentario = $row->comentario;
		$nombre = $row->loc_nombre;
		/* Se reemplazan los espacios de los nombres de los locales por _ ya que los nombres de las carpetas que contienen 
		 * las imagenes para cada local están escritos con _. Ej: panama_jack
		*/
		$nombreLink = str_replace ( ' ', '_', $nombre );
	
		echo '
			<div class="mdl-card mensaje mdl-cell mdl-cell--12-col">
			<div class="fondoTexto">
				<div class="mdl-card__title mdl-color-text--grey-50 texto">
					<blockquote>
						<a  href="local.php?name='.$nombreLink.'&id='.$idLocal.'">' . $comentario . '</a>
					</blockquote>
				</div>
			</div>
				<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
					<div>
						<img src=' . '' . 'images/usuarios/' . $imagenUsuario . '' . ' class="avatarMsg">
					</div>
					<div class="autor">
						<strong>' . $nombreUsuario . '</strong> <span>2 days ago</span>
					</div>
					<h3>
						<a id="localGaleria" class=" mdl-js-ripple-effect"
								href="local.php?name='.$nombreLink.'&id='.$idLocal.'">' . $nombre . '</a>
					</h3>
				</div>
			</div>';
	}
}
?>