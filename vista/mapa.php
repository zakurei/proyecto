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
<?php include_once ("head.php")  ?>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="../js/mapa.js"></script>

<title>Mapa</title>

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

#marker{
	text-align:center;
}
.markerh3{
	color:red;
}

#map b{
	margin:0 auto;
	color:blue;
}

</style>
</head>
<body id="mapa">
 
      
<div class="fondo">
	<div class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
      
			<?php include_once ("menu.php")  ?>

	<div id="map" style="width: 1440px; height: 611px;"></div>
	
	<?php include_once ("footer.php")?>
		
		 </main>
	</div>
</div>
</body>
</html>