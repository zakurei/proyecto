<?php
	function seleccionLocal(){
		$conexion = new conexion();
		$conn = $conexion->conectar();
		
		$sql = "SELECT * FROM locales";
		$cons = $conexion->ejecutar_consulta($sql);
		
		while ($row = mysqli_fetch_object($cons)){
			$id =  $row->id;
			$imagen = $row->imagen;
			$nombre = $row->nombre;
			$nombreId= str_replace(' ', '_', $nombre);
				
			echo '
 					<div class="mdl-card galeria" style=" border: 1px solid #ce318d; background:url('.''.'images/galeriaLocales/'.$imagen.''.')  center / 130% 100%;">
 						<div class="mdl-card__title mdl-card--expand"></div>
 							<div class="mdl-card__actions">
								<a id="localGaleria" class="mdl-button mdl-js-button mdl-js-ripple-effect btnAviso" href="local.php?name='.$nombreId.'&id='.$id.'">
									'.$nombre.'
								</a>
							</div>
 					</div>';
		}
	}

?>