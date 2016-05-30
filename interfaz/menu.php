<div class="mdl-layout__header menu">
	<div class="mdl-layout__header-row">
	
<?php
//Usuarios registrados/admin.
if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true){
 	include_once ('../logica/menu.php');
	include_once ("../controladores/breadCrumbs.php");
	
	echo '
		<div class="mdl-card__supporting-text usuarioMenu mdl-color-text--grey-600">
					<div>'.$imagen.'</div>
						<div class="autor">
							<strong>'.$nombre.'</strong>
						</div>
					
					
				</div>
				<span class="mdl-layout-title">
					<img src="images/logoMenu.png" class="logo" style="width:auto; height:45px;">
				</span>'?>
						
		
			<div class="mdl-layout-spacer" style="text-align:center;"><span id="breadCrumb" class="mdl-layout-title"></span></div>
					
				 <?php echo'
				
			<a id="home" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="index.php"><div class="material-icons">home</div></a>
			<div class="mdl-tooltip" for="home">Home</div>
			<a id="seleccionLocales" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="seleccionLocal.php"><div class="material-icons">local_bar</div></a>						
			<div class="mdl-tooltip" for="seleccionLocales">Galeria Locales</div>
			<a id="mensajes" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="mensajes.php"><div class="material-icons">message</div></a>
			<div class="mdl-tooltip" for="mensajes">Mensajes</div>
			<a id="mapa" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="mapa.php"><div class="material-icons">my_location</div></a>
			<div class="mdl-tooltip" for="mapa">Mapa</div>				
			'.$editar.'	
			<a id="contacto" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="contacto.php"><div class="material-icons">email</div></a>
			<div class="mdl-tooltip" for="contacto">Contacto</div>
			<a id="salir" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="../logica/cerrarSesion.php"><div class="material-icons">account_circle</div></a>						
			<div class="mdl-tooltip" for="salir">Salir</div>					
		';
	
//Usuarios no registrados.
} else {
	
	echo '
			<span class="mdl-layout-title">
					<img src="images/logoMenu.png" class="logo" style="width:auto; height:45px;">
					</span>'?>		
		
			<div class="mdl-layout-spacer" style="text-align:center;"><span id="breadCrumb" class="mdl-layout-title"></span> </div>	 
		
			<?php echo'
			<a id="home" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="index.php"><div class="material-icons">home</div></a>
			<div class="mdl-tooltip" for="home">Home</div>
			<a id="seleccionLocales" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="seleccionLocal.php"><div class="material-icons">local_bar</div></a>						
			<div class="mdl-tooltip" for="seleccionLocales">Galeria Locales</div>
			<a id="mensajes" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="mensajes.php"><div class="material-icons">message</div></a>
			<div class="mdl-tooltip" for="mensajes">Mensajes</div>
			<a id="mapa" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="mapa.php"><div class="material-icons">my_location</div></a>
			<div class="mdl-tooltip" for="mapa">Mapa</div>			
			<a id="registro" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="registro.php"><div class="material-icons">assignment</div></a>
			<div class="mdl-tooltip" for="registro">Registrate</div>				
			<a id="entrar" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="login.php"><div class="material-icons">account_circle</div></a>						
			<div class="mdl-tooltip" for="entrar">Iniciar Sesión</div>					
			<a id="contacto" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="contacto.php"><div class="material-icons">email</div></a>
			<div class="mdl-tooltip" for="contacto">Contacto</div>
		';
}
?>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
          				<label id="iconoSearch" class="mdl-button mdl-js-button mdl-button--icon" for="search"><i class="material-icons">search</i></label>
          				<div class="mdl-tooltip" for="iconoSearch">Buscar</div>
          				
          				<div class="mdl-textfield__expandable-holder">
            				<input class="mdl-textfield__input" type="text" id="search" style="background-color:white; color:black;" />
				   		</div>
					</div>
				</div>
			</div>