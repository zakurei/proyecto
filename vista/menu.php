<?php session_start()?>
<div class="mdl-layout__header menu">
				<div class="mdl-layout__header-row">
					<!-- Title block, this can contain an img -->
					<span class="mdl-layout-title">MagaGuide</span>
					<!-- This pushs the elements to the right -->
					<div class="mdl-layout-spacer"></div>
						<a id="home" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="index.php"><div class="material-icons">home</div></a>
						<div class="mdl-tooltip" for="home">Home</div>
						<a id="locales" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="local.php"><div class="material-icons">local_bar</div></a>						
						<div class="mdl-tooltip" for="locales">Locales</div>
						<a id="mensajes" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="mensajes.php"><div class="material-icons">message</div></a>
						<div class="mdl-tooltip" for="mensajes">Mensajes</div>
						<a id="mapa" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="mapa.php"><div class="material-icons">my_location</div></a>
						<div class="mdl-tooltip" for="mapa">Mapa</div>			
						<a id="registro" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="registro.php"><div class="material-icons">assignment</div></a>
						<div class="mdl-tooltip" for="registro">Reg�strate</div>				
						<a id="entrar" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="login.php"><div class="material-icons">account_circle</div></a>						
						<div class="mdl-tooltip" for="entrar">Iniciar Sesi�n</div>					
						<a id="contacto" class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect" href="contacto.php"><div class="material-icons">email</div></a>
						<div class="mdl-tooltip" for="contacto">Contacto</div>
					
					<!-- Search -->
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
          				<label id="iconoSearch" class="mdl-button mdl-js-button mdl-button--icon" for="search"><i class="material-icons">search</i></label>
          				<div class="mdl-tooltip" for="iconoSearch">Buscar</div>
          				
          				<div class="mdl-textfield__expandable-holder">
            				<input class="mdl-textfield__input" type="text" id="search" />
				   		</div>
					</div>
				</div>
			</div>