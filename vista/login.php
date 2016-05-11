<?php session_start()?>
<!doctype html>

<html lang="en">
<head>

<?php include_once ("head.php")?>

<title>Login</title>
<link rel="stylesheet" href="../css/set2.css">
</head>
<body id="login">

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
								class="input__field input__field--efecto" type="text"
								id="correo"> <label class="input__label input__label--efecto"
								for="correo"> <span
									class="input__label-content input__label-content--efecto">Email</span>
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
								class="input__field input__field--efecto" type="password"
								id="pass"> <label class="input__label input__label--efecto"
								for="pass"> <span
									class="input__label-content input__label-content--efecto">Password</span>
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
							<button style="color:white; background-color:#DC483A;"
								class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Log
								in</button>
						</div>
		
				</div>
			</div>
			
			
			<?php include_once ("footer.php")?>
				
				
			</main>
		</div>
	</div>
	
	
	<!-- Evitamos que el texto que se mueve de los inputs no vuelva a introducirse dentro de
	los inputs al quitar el foco del input. -->
	<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
		
		<script>
			// EXPRESIONES REGULARES
			var NO_EMPTY =  /^\s*$/;
			var ONLY_NUMBERS = /^([0-9])*$/;
			var EMAIL = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
			// Debe tener mínimo: 1 minúscula, 1 mayúscula, 1 número y una longitud de 8 caracteres.
			var PASSWORD = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
			var DATE = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
		
			$(document).ready(function(){
				$("input").blur(function(){
					alert ("entra");
					if (NO_EMPTY.test($(this).val())){
						alert("dsfgfdgqfdg");
						$(this).next("path").css("fill:","red");
						
						}else{

// 						|| $(this).val() == EMAIL

					}
				});

				
			});


		</script>
</body>
</html>