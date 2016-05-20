/*Validacion de campos en el registro y login*/
var vacio =  /^\s*$/;
var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

$(document).ready(function(){

	//Ponemos el botón del registro y el login disabled
	$("#registrar").attr("disabled",true);
	$(".login").attr("disabled",true);
	
	$("#usuario").blur(function(){
		if (vacio.test($("#usuario").val()) == true ){
			$(".usuario").css("color","red");
			$("#usuarioError li").show();
			$("#usuarioError li").text("El usuario no puede estar vacío");
			$("#registrar").attr("disabled",true);
			$(".login").attr("disabled",true);
			}else{
			$(".usuario").css("color","green");
			$("#usuarioError li").hide();
		}
	});

	$("#email").blur(function(){
		if (email.test($("#email").val()) == false || vacio.test($("#email").val() == true)){
			$(".email").css("color","red");
			$("#emailError li").show();
			$("#emailError li").text("El email no puede estar vacio y debe ser un email válido");
			$("#registrar").attr("disabled",true);
			}else{
			$(".email").css("color","green");
			$("#emailError li").hide();
		}
	});

	$("#password").blur(function(){
		if (vacio.test($("#password").val()) == true){
			$(".password").css("color","red");
			$("#passwordError li").show();
			$("#passwordError li").text("La password no puede estar vacía");
			$("#registrar").attr("disabled",true);
			$(".login").attr("disabled",true);
			}else{
			$(".password").css("color","green");
			$("#passwordError li").hide();		
		}
	});	
	
	//Quitamos el disable de los botones cuando estén todos los campos validados correctamente.
	$("input").blur(function(){
		if (vacio.test($("#usuario").val()) == false
				&& email.test($("#email").val()) == true
				&& vacio.test($("#password").val()) == false ){
			
			$("#registrar").attr("disabled",false);
			
		} else if (vacio.test($("#usuario").val()) == false
				&& vacio.test($("#password").val()) == false){
			$(".login").attr("disabled",false);
		}
	});
	
	
	
	
	/* Evitamos que el texto que se mueve de los inputs no vuelva a introducirse dentro de
	los inputs al quitar el foco del input.*/
	(function() {
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
			// en el caso de que el input ya esté lleno..
			if( inputEl.value.trim() !== '' ) {
				classie.add( inputEl.parentNode, 'input--filled' );
			}

			// eventos:
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
});

