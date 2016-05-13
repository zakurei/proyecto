<?php
$avatar = $_SESSION['usuario']['Avatar'];
$nombre = $_SESSION['usuario']['Nombre'];


	$imagen = '<img class="avatarMsg" src="../images/'.$avatar.'">';

if ($_SESSION['usuario']['Tipo'] == "2"){
	$editar = '<a id="editar" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="editarAdmin.php"><div class="material-icons">mode_edit</div></a>
			<div class="mdl-tooltip" for="editar">Modificar Perfiles</div>';

} else if ($_SESSION['usuario']['Tipo'] == "1"){
	$editar = '<a id="editar" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="editar.php"><div class="material-icons">mode_edit</div></a>
			<div class="mdl-tooltip" for="editar">Editar Perfil</div>';
}

?>