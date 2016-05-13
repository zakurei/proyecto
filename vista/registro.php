<?php session_start()?>
<!doctype html>

<html lang="en">
<head>

<?php 
include_once ("head.php");
?>
<script src="js/util.js"></script>

<title>Registro</title>

<link rel="stylesheet" href="../css/set2.css">
</head>
<body id="registro">

	<div class="fondo">
		<div
			class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
      
			<?php include_once ("menu.php")?>
			
	
		<main class="mdl-layout__content">
			<div class="grid mdl-grid">
				<div
					class="mdl-card centro mdl-shadow--4dp mdl-cell mdl-cell--12-col">
					<div class="mdl-card__media mdl-color-text--grey-50">
					<img id="fotoLocal" alt="" src="../images/cocobongos.jpg">
					</div>
					<div class="mdl-color-text--grey-700 mdl-card__supporting-text ">

						<div
							class="mdl-card centro mdl-shadow--4dp mdl-cell mdl-cell--6-col ">
							<span class="input input--efecto"> <input
								class="input__field input__field--efecto" type="text" id="usuario">
								<label class="input__label input__label--efecto" for="usuario"> <span
									class="input__label-content input__label-content--efecto usuario">Usuario</span>
							</label> <svg class="graphic graphic--efecto" width="300%"
									height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path
										d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
						<path
										d="M0,2.5c0,0,298.666,0,399.333,0C448.336,2.5,513.994,13,597,13c77.327,0,135-10.5,200.999-10.5c95.996,0,402.001,0,402.001,0"></path>
					</svg>
							</span>
						</div>

						<div
							class="mdl-card centro mdl-shadow--4dp mdl-cell mdl-cell--6-col">

							<span class="input input--efecto"> <input
								class="input__field input__field--efecto" type="text"
								id="email"> <label class="input__label input__label--efecto"
								for="email"> <span
									class="input__label-content input__label-content--efecto email">Email</span>
							</label> <svg class="graphic graphic--efecto" width="300%"
									height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path
										d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
						<path
										d="M0,2.5c0,0,298.666,0,399.333,0C448.336,2.5,513.994,13,597,13c77.327,0,135-10.5,200.999-10.5c95.996,0,402.001,0,402.001,0"></path>
					</svg>
							</span>
						</div>


						<div
							class="mdl-card centro mdl-shadow--4dp mdl-cell mdl-cell--6-col ">
							<span class="input input--efecto"> <input
								class="input__field input__field--efecto" type="password" id="password">
								<label class="input__label input__label--efecto" for="password"> <span
									class="input__label-content input__label-content--efecto password">Password</span>
							</label> <svg class="graphic graphic--efecto" width="300%"
									height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path
										d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
						<path
										d="M0,2.5c0,0,298.666,0,399.333,0C448.336,2.5,513.994,13,597,13c77.327,0,135-10.5,200.999-10.5c95.996,0,402.001,0,402.001,0"></path>
					</svg>
							</span>
						</div>
						
					</div>
					<div class="mdl-card__actions mdl-card--border" style="text-align:center;">
							<button type ="submit" id="registrar" style="color:white;"
								class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect btnAviso">Log
								in</button>
						</div>
				</div>
			</div>
			
			<?php include_once ("footer.php")?>
			
			 </main>
		</div>
	</div>
</body>
</html>