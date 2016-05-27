<?php session_start();
include_once ("../modelo/conexion.php");
include_once ("../controladores/editar.php");
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] == false) {
	header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
<?php include_once ("head.php");?>
<title>Editar Perfil</title>
<script src="js/utilEditar.js"></script>
<link rel="stylesheet" href="css/set2.css">

</head>
<body id="editar">

<div class="fondo">
	<div class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
		<?php include_once ("menu.php")?>
	<main class="mdl-layout__content">
		<div class="grid mdl-grid">
			<div class="mdl-card centro mdl-shadow--4dp mdl-cell mdl-cell--12-col">
				<div class="mdl-card__media mdl-color-text--grey-50">
					<img id="fotoPortada" alt="" src="images/portada.png">
				</div>
					<?php 
					guardarPerfil();
					mostrarPerfil();
					?>		
				<div class="errores">
					<span id="rePasswordError"></span>
				</div>		
				<div class="mdl-card__supporting-text inputs ">	
					<div class="mdl-card centro mdl-cell mdl-cell--6-col ">
							<span class="input input--efecto"> 
							 <input class="input__field input__field--efecto" type="password" id="password" name="password">
								 <label class="input__label input__label--efecto" for="password">
								  <span class="input__label-content input__label-content--efecto password">Password</span>
								</label>
						 <svg class="graphic graphic--efecto" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
							<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
							<path d="M0,2.5c0,0,298.666,0,399.333,0C448.336,2.5,513.994,13,597,13c77.327,0,135-10.5,200.999-10.5c95.996,0,402.001,0,402.001,0"></path>
						</svg>
						</span>
					</div>
						
					<div class="mdl-card centro mdl-cell mdl-cell--6-col">
							<span class="input input--efecto">
							 <input class="input__field input__field--efecto" type="password" id="rePassword" name="rePassword">
								 <label class="input__label input__label--efecto" for="rePassword"> 
									<span class="input__label-content input__label-content--efecto rePassword">Repetir Password</span>
								</label>
							<svg class="graphic graphic--efecto" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
								<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
								<path d="M0,2.5c0,0,298.666,0,399.333,0C448.336,2.5,513.994,13,597,13c77.327,0,135-10.5,200.999-10.5c95.996,0,402.001,0,402.001,0"></path>
							</svg>
							</span>
						</div>
					</div>	
						
						
					<div class="mdl-card__actions mdl-card--border" style="text-align: center;">
						<button type="submit" id="guardar" name="guardar"
							class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect btnAviso">Guardar Cambios</button>
					</div>	
				</form>
			</div>
		</div>
		<?php include_once ("footer.php")?>	
		 </main>
	</div>
</div>
</body>
</html>