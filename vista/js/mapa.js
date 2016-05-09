/*Creando mapa de los locales de magaluf usando la api de google, instroduzco la información de lo que
 * irá en los marker de los locales y la geolocalización de cada local en el array location,
 * en la variable map introduzco el centro del foco del mapa, tipo de mapa que usaremos y si 
 * necesitamos zoom o no, en la variable icon instroduciremos la imagen del puntero y su tamaño,
 * y creamos un bucle para recorrer el array e ir pintando los datos de cada local en su sitio.
 
 */
	function initialize() {
		var locations = [
		                 ["<div id='marker'><h3 class='markerh3'>Jokers Club</h3>" + 
/*Jokers Club*/			  "<b>HAVE FUN!!!!!</b><br/>"  
						  	, 39.50727, 2.531797, 1],
						  
		                 ["<div id='marker'><h3 class='markerh3'>Stereo Bar</h3>" + 
/*Stereo Bar*/			  "<b>HAVE FUN!!!!!</b><br/>" 
						  	, 39.5088147, 2.5352249, 2],
						  
		                 ["<div id='marker'><h3 class='markerh3'>Coco Bongos</h3>" + 
/*Coco Bongos*/			  "<b>HAVE FUN!!!!!</b><br/>"  
						  	, 39.507493, 2.531870, 3],
						  
		                 ["<div id='marker'><h3 class='markerh3'>Windsor</h3>" + 
/*Windsor*/			      "<b>HAVE FUN!!!!!</b><br/>"  
						  	, 39.505347, 2.531348, 4],
						  
		                 ["<div id='marker'><h3 class='markerh3'>Benny Hill</h3>" + 
/*Benny Hill*/			  "<b>HAVE FUN!!!!!</b><br/>"  
						  	, 39.5078717, 2.5318938, 5],
		                 
		                 ["<div id='marker'><h3 class='markerh3'>Mano's Bar</h3>" + 
/*Manos*/				  "<b>HAVE FUN!!!!!</b><br/>"  
						  	, 39.505497, 2.530891, 6],
						  
		                 ["<div id='marker'><h3 class='markerh3'>Dreams</h3>" + 
/*Dreams*/ 			  	  "<b>HAVE FUN!!!!!</b><br/>"  
						  	,39.5052262, 2.5303721, 7],
						  
		                 ["<div id='marker'><h3 class='markerh3'>Panama Jack</h3>" + 
/*Panama Jack*/	 		  "<b>HAVE FUN!!!!!</b><br/>"  
						  	, 39.509522, 2.532604, 8],
						  
		                 ["<div id='marker'><h3 class='markerh3'>Coyote Ugly</h3>" + 
/*Coyote Ugly*/ 		  "<b>HAVE FUN!!!!!</b><br/>"  
						  	, 39.5090994, 2.5340492, 9],
						  
		                 ["<div id='marker'><h3 class='markerh3'>City Lights</h3>" + 
/*City Lights*/	  		  "<b>HAVE FUN!!!!!</b><br/>"  
						  	, 39.508795,2.5353398, 10],
						  
			             ["<div id='marker'><h3 class='markerh3'>The Red Lion</h3>" + 
/*The Red Lion*/	  	  "<b>HAVE FUN!!!!!</b><br/>"  
			              	, 39.5092492, 2.5361327, 11],

				         ["<div id='marker'><h3 class='markerh3'>Crystals bar</h3>" + 
/*Crystals*/	  		  "<b>HAVE FUN!!!!!</b><br/>"  
 						  	, 39.509175, 2.536376, 12],			               
			               

					     ["<div id='marker'><h3 class='markerh3'>The office</h3>" + 
/*The office*/	 		  "<b>HAVE FUN!!!!!</b><br/>"  
	 					  	, 39.509673, 2.536905, 13],

						 ["<div id='marker'><h3 class='markerh3'>Bonkers</h3>" + 
/*Bonkers*/	  			  "<b>HAVE FUN!!!!!</b><br/>"  
						  	, 39.509450, 2.536568, 14],
				          
					     ["<div id='marker'><h3 class='markerh3'>Mambos</h3>" + 
/*Mambos*/	  		 	  "<b>HAVE FUN!!!!!</b><br/>"  
							, 39.509442, 2.537119, 15],
						  
						 ["<div id='marker'><h3 class='markerh3'>Alex</h3>" + 
/*Alex*/	  		 	  "<b>HAVE FUN!!!!!</b><br/>"  
						  	, 39.5094858,2.5370604, 16],
						  	
						 ["<div id='marker'><h3 class='markerh3'>Chaplins</h3>" + 
/*Chaplins*/	  		  "<b>HAVE FUN!!!!!</b><br/>"  
						  	, 39.509771, 2.537148, 17] 	
			                       
		               ];
		
		
		var map = new google.maps.Map(document.getElementById('map'), {
			center : new google.maps.LatLng(39.507108, 2.531945),
			zoom : 16,
			mapTypeId : google.maps.MapTypeId.ROADMAP,
		    });

		    var infowindow = new google.maps.InfoWindow();
		    var marker, i;

		
		var icon = {
//			    url: "markerSirena.png", 
			    scaledSize: new google.maps.Size(31, 50), 
			    origin: null, 
			    anchor: null 
			};
		
		for (i = 0; i < locations.length; i++) {  
		      marker = new google.maps.Marker({
		    	icon: icon,
		        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
		        map: map,
		        animation: google.maps.Animation.DROP,   
		      });
		      
		      google.maps.event.addListener(marker, 'click', (function(marker, i) {
		        return function() {
		          infowindow.setContent(locations[i][0]);
		          infowindow.open(map, marker);
		        }
		      })(marker, i));
		    }
	}
	
	google.maps.event.addDomListener(window, 'load', initialize)
