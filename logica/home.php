<?php
function boton(){
	//En el caso de estar logueado no se muestra el botón de la home ya que lleva al registro.
	if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true){
		
	} else {
		return '<a id="btnHome" class="mdl-button mdl-js-button mdl-js-ripple-effect btnAviso"
						href="registro.php">Vota y comenta tus locales favoritos</a>';
	}
}
?>