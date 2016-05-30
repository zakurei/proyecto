<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
<?php
include_once ("head.php");
include_once ("../conexion/conexion.php");
include_once ("../logica/tops.php");
include_once ("../logica/mensajes.php");
?>

<title>Mensajes</title>
</head>
<body id="mensajes">
	<div class="fondo">
		<div class="container mdl-layout mdl-js-layout has-drawer is-upgraded">
	<?php include_once ("menu.php")?>
	
		<main class="mdl-layout__content">
			<div class="grid mdl-grid">

				<!-- Tops -->
				<div class="mdl-card tops mdl-cell mdl-cell--12-col">
					<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
						<div class="mdl-tabs__tab-bar headerTops">
							<a href="#topLocalesCom" class="mdl-tabs__tab is-active">Locales
								más comentados</a> <a href="#topUsuarios" class="mdl-tabs__tab">Usuarios
								más activos</a> <a href="#topLocalesVot" class="mdl-tabs__tab">Locales
								más votados</a>
						</div>

						<!--Top 3 locales más comentados  -->
						<div class="mdl-tabs__panel is-active" id="topLocalesCom">
							<ul class="mdl-list">
							<?php topLocComents();?>			
							</ul>
						</div>

						<!--Top 3 usuarios más activos  -->
						<div class="mdl-tabs__panel" id="topUsuarios">
							<ul class="mdl-list">
								<?php topUsComents();?>	
								
							</ul>
						</div>

						<!--Top 3 locales más votados  -->
						<div class="mdl-tabs__panel" id="topLocalesVot">
							<ul class="mdl-list">
								<?php topLocVotados(); ?>
							</ul>
						</div>
					</div>
				</div>


				<!-- Sacar lista de mensajes -->
				<?php mensajes();?>
	
		</div>
		<?php include_once ("footer.php")?>
		 </main>
		</div>
	</div>
</body>
</html>