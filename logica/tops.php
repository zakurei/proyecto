<?php
function topLocComents() {
	// Muestro nombre, imagen y cantidad de comentarios de los 3 locales más comentados.
	$conexion = new conexion ();
	$conn = $conexion->conectar ();
	
	$sql = "SELECT l.nombre, l.imagen,
						 COUNT(c.id) AS cantidadComents
						FROM
						 locales l
						 INNER JOIN comentarios c ON l.id = c.id_locales
						GROUP BY
						 l.nombre
						ORDER BY
						 COUNT(c.id) DESC LIMIT 3";
	
	$cons = $conexion->ejecutar_consulta ( $sql );
	
	while ( $row = mysqli_fetch_object ( $cons ) ) {
		$nombreLocal = $row->nombre;
		$comentarios = $row->cantidadComents;
		$imagenLocal = $row->imagen;
		
		echo '
				<li class="mdl-list__item mdl-list__item--two-line">
				<span class="mdl-list__item-primary-content">
					<img src=' . '' . 'images/galeriaLocales/' . $imagenLocal . '' . ' class="avatarMsg">
					 <div>
					 <span id="nombreLocTop">' . $nombreLocal . '</span><br/>
	      				<span class="mdl-list__item-sub-title">' . $comentarios . ' comentarios</span>
					</div>
				</span> <span class="mdl-list__item-secondary-content"> <i
							class="material-icons">message</i>
				</span></li>
			';
	}
}
function topUsComents() {
	// Muestro nombre, imagen y cantidad de comentarios de los 3 usuarios que más comentan.
	$conexion = new conexion ();
	$conn = $conexion->conectar ();
	
	$sql = "SELECT u.nombre, u.avatar,
						 COUNT(c.id) AS cantidadComents
						FROM
						 usuarios AS u
						 INNER JOIN comentarios AS c ON u.id = c.id_usuarios
						GROUP BY
						 u.nombre
						ORDER BY
						 COUNT(c.id) DESC LIMIT 3";
	
	$cons = $conexion->ejecutar_consulta ( $sql );
	
	while ( $row = mysqli_fetch_object ( $cons ) ) {
		$nombreUsuario = $row->nombre;
		$comentarios = $row->cantidadComents;
		$imagen = $row->avatar;
		
		echo '
				<li class="mdl-list__item mdl-list__item--two-line">
				<span class="mdl-list__item-primary-content">
					<img src=' . '' . 'images/usuarios/' . $imagen . '' . ' class="avatarMsg">
					 <div>
					 <span>' . $nombreUsuario . '</span><br/>
	      				<span class="mdl-list__item-sub-title">' . $comentarios . ' comentarios</span>
					</div>
				</span> <span class="mdl-list__item-secondary-content"> <i
							class="material-icons">thumb_up</i>
				</span></li>
			';
	}
}
function topLocVotados() {
	// Muestro nombre, imagen y cantidad de votos de los 3 locales más votados.
	$conexion = new conexion ();
	$conn = $conexion->conectar ();
	
	$sql = "SELECT loc.nombre, loc.imagen,
						 COUNT(l.id) AS cantidadLikes
						FROM
						 locales AS loc
						 INNER JOIN likes AS l ON loc.id = l.id_locales_likes
						GROUP BY
						 loc.nombre
						ORDER BY
						 COUNT(l.id) DESC LIMIT 3";
	
	$cons = $conexion->ejecutar_consulta ( $sql );
	
	while ( $row = mysqli_fetch_object ( $cons ) ) {
		$nombreUsuario = $row->nombre;
		$likes = $row->cantidadLikes;
		$imagen = $row->imagen;
		
		echo '
				<li class="mdl-list__item mdl-list__item--two-line">
				<span class="mdl-list__item-primary-content">
					<img src=' . '' . 'images/galeriaLocales/' . $imagen . '' . ' class="avatarMsg">
					 <div>
					 <span id="nombreLocTop">' . $nombreUsuario . '</span><br/>
	      				<span class="mdl-list__item-sub-title">' . $likes . ' votos</span>
					</div>
				</span> <span class="mdl-list__item-secondary-content"> <i
							class="material-icons">favorite</i>
				</span></li>
			';
	}
}
?>