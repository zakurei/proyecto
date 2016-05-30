<?php
error_reporting(null);
$avatar = $_SESSION['usuario']['avatar'];
$nombre = $_SESSION['usuario']['nombre'];

	$imagen = '<img class="avatarMsg" src="images/usuarios/'.$avatar.'">';

// if ($_SESSION['usuario']['tipo'] == 2){
// 	$editar = '<a id="editar" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="editarAdmin.php"><div class="material-icons">mode_edit</div></a>
// 			<div class="mdl-tooltip" for="editar">Modificar Perfiles</div>';

// } else
	if ($_SESSION['usuario']['tipo'] == 1 || $_SESSION['usuario']['tipo'] == 2){
	$editar = '<a id="editar" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="editar.php"><div class="material-icons">mode_edit</div></a>
			<div class="mdl-tooltip" for="editar">Editar Perfil</div>';
}

?>