<?php session_start()?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description"
	content="A front-end template that helps you build fast, modern mobile web apps.">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

<title>Login</title>

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<link rel="icon" sizes="192x192"
	href="images/touch/chrome-touch-icon-192x192.png">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Material Design Lite">
<link rel="apple-touch-icon-precomposed"
	href="apple-touch-icon-precomposed.png">

<!-- Tile icon for Win8 (144x144 + tile color) -->
<meta name="msapplication-TileImage"
	content="images/touch/ms-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor" content="#3372DF">


<link
	href='https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en'
	rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<link rel="stylesheet"
	href="https://code.getmdl.io/1.1.3/material.grey-orange.min.css">

<link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="../css/set2.css">
<script src="jquery-1.12.2.min.js"></script>
<style>
#view-source {
	position: fixed;
	display: block;
	right: 0;
	bottom: 0;
	margin-right: 40px;
	margin-bottom: 40px;
	z-index: 900;
}
</style>
</head>
<body>

	<div class="fondo">
		<div
			class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
      
			<?php include_once ("menu.php")?>
			
	
		<main class="mdl-layout__content">
			<div class="grid mdl-grid">
				<div
					class="mdl-card centro mdl-shadow--4dp mdl-cell mdl-cell--12-col">
					<div class="mdl-card__media mdl-color-text--grey-50"
						style="background-image: url('../images/road_big.jpg')">
						<h3 style="color: #2EFE2E">
							<b>Jokers Club</b>
						</h3>

					</div>
					<div class="mdl-color-text--grey-700 mdl-card__supporting-text ">

						<div
							class="mdl-card centro mdl-shadow--4dp mdl-cell mdl-cell--6-col ">
							<span class="input input--shoko"> <input
								class="input__field input__field--shoko" type="text"
								id="correo"> <label class="input__label input__label--shoko"
								for="correo"> <span
									class="input__label-content input__label-content--shoko">Email</span>
							</label> <svg class="graphic graphic--shoko" width="300%"
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

							<span class="input input--shoko"> <input
								class="input__field input__field--shoko" type="password"
								id="pass"> <label class="input__label input__label--shoko"
								for="pass"> <span
									class="input__label-content input__label-content--shoko">Password</span>
							</label> <svg class="graphic graphic--shoko" width="300%"
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
			<footer class="mdl-mini-footer">
				<div class="mdl-mini-footer__left-section">
					<ul class="mdl-mini-footer__link-list">
						<li><a href="#">Terminos legales</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>

				<div class="mdl-mini-footer__right-section">
					<div class="mdl-logo">
						<b>© 2016 Iván Sánchez Fernández all rights reserved</b>
					</div>
				</div>
			</footer> </main>
		</div>
	</div>
	<script src="../js/classie.js"></script>
	<script src="../js/material.min.js"></script>
	
	
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