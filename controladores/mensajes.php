<?php
function mensajes(){
	$conexion = new conexion ();
	$conn = $conexion->conectar ();
	
	$sql = "SELECT l.nombre as loc_nombre, u.nombre as us_nombre, u.avatar, c.comentario
							FROM usuarios u
							JOIN comentarios c ON u.id = c.id_usuarios
							JOIN locales l ON c.id_locales = l.id
							ORDER BY RAND()
							LIMIT 10";
	
	$cons = $conexion->ejecutar_consulta ( $sql );
	
	while ( $row = mysqli_fetch_object ( $cons ) ) {
		$nombreUsuario = $row->us_nombre;
		$imagenUsuario = $row->avatar;
		$comentario = $row->comentario;
		$nombre = $row->loc_nombre;
		$nombreLink = str_replace ( ' ', '_', $nombre );
	
		echo '
			<div class="mdl-card mensaje mdl-cell mdl-cell--12-col">
			<div class="fondoTexto">
				<div class="mdl-card__title mdl-color-text--grey-50 texto">
					<blockquote>
						<a href="local.php?id=' . $nombreLink . '">' . $comentario . '</a>
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
								<a id="localGaleria" class=" mdl-js-ripple-effect" href="local.php?id=' . $nombreLink . '">
									' . $nombre . '
								</a>
							</h3>
	
				</div>
			</div>
					';
	}
	
	
	
	
}
?>