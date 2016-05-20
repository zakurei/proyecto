<?php session_start()?>
<!doctype html>
<html lang="en">
<head>
<?php include_once ("head.php")?>
<title>Home</title>
</head>
<body id="home">
	<div class="container mdl-layout mdl-js-layout has-drawer is-upgraded">
            
		<?php include_once ("menu.php")?>	
		
  <main class="mdl-layout__content">

		<div class="mdl-layout__tab-panel is-active">
			<div class="topHome">
				<div class="topHomeTexto mdl-typography--text-center"><br/>
					<img src="images/logoMenu.png" class="logo" style="width:500px; height:100px;"><br/>
					<a
						class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--accent"
						href="#intro"> <i class="material-icons">keyboard_arrow_down</i>
					</a>
				</div>
			</div>
			<div id="intro" class="mdl-grid centroHome">
				<div class="centroHomeIntro mdl-cell mdl-cell--12-col">
					<p class="mdl-typography--headline">En esta web tienes a tu
						disposición información actual sobre los mejores locales de
						Magaluf:</p>
				</div>
				<div
					class="centroHomeIntro mdl-cell mdl-cell--5-col mdl-cell--1-col-tablet mdl-cell--hide-phone">
					<div class="puntosCentroHome">
						<div class="punto"></div>
						<div class="punto"></div>
						<div class="punto"></div>
						<div class="punto"></div>
					</div>
				</div>
				<div
					class="centroHomeIntro mdl-cell mdl-cell--7-col mdl-cell--6-col-tablet mdl-cell--4-col-phone">
					<div class="linksCentroHome">
						<div class="link">
							<a href="seleccionLocal.php">Galería de locales</a>
						</div>
						<div class="link">
							<a href="mensajes.php">Comentarios de los usuarios</a>
						</div>
						<div class="link">
							<a href="mapa.php">Mapa</a>
						</div>
						<div class="link">
							<a href="contacto.php">Contacto</a>
						</div>
					</div>
				</div>

				<div class="centroHomeIntro mdl-cell mdl-cell--12-col">

					<p class="centroP">
						<img src="images/maga2016.jpg" alt="maga2016"
							class="imgCentroHome float-left"> Cualquiera que sea su edad o el
						motivo de sus vacaciones, la variedad de experiencias para
						disfrutar en Magaluf es ilimitada. Si busca tranquilidad o
						diversión, si quiere disfrutar de nuestra bella costa, salpicada
						con playas y pequeñas calas, explorar los atractivos paisajes de
						interior, deleitarse con nuestros excelentes restaurantes o
						degustar los vinos locales, ya sea por negocios, vacaciones o para
						realizar actividades, encontrará todo esto y más! Aquí todo el
						mundo es bienvenido!
					</p>
					<p>Situado en el suroeste de Mallorca, a solo 20 minutos del
						aeropuerto, Magaluf ofrece una excelente infraestructura hotelera,
						y abundantes servicios en todas sus zonas de playa. Añada a la
						receta 300 días de sol al año y temperaturas medias de 27º en
						verano y 14º en invierno para que su estancia sea ¡simplemente
						sensacional!</p>
				</div>
			</div>

			<div class="mdl-grid mdl-grid--no-spacing botHome">
				<div
					class="mdl-cell mdl-cell--12-col mdl-typography--text-center frases">
					<p>
					
					
					<blockquote>No Armani, no punani.</blockquote>
					</p>
					<p>
					
					
					<blockquote>Hello chicken nugget.</blockquote>
					</p>
					<p>
					
					
					<blockquote>What happens in Magaluf stays in Magaluf.</blockquote>
					</p>


				</div>
			</div>
		</div>
      <?php include_once ("footer.php")?>
  </main>
	</div>
</body>
</html>

