
$(document).ready(function(){

	$("#rePassword").blur(function(){
		if (($("#password").val()) == ($("#rePassword").val())){
			$(".password").css("color","green");
			$(".rePassword").css("color","green");
			$("#rePasswordError").hide();		
			$("#guardar").attr("disabled",false);
			
		} else {
			$(".rePassword").css("color","red");
			$(".password").css("color","red");
			$("#rePasswordError").show();
			$("#rePasswordError").text("Las contraseñas no coinciden");
			$("#guardar").attr("disabled",true);
		}
	});
	$("#password").blur(function(){
		if (($("#password").val()) == ($("#rePassword").val())){
			$(".password").css("color","green");
			$(".rePassword").css("color","green");
			$("#rePasswordError").hide();		
			$("#guardar").attr("disabled",false);
			
		}
	});
	
	/* Evitamos que el texto que se mueve de los inputs no vuelva a introducirse dentro de
	estos cuando estén llenos*/
	(function() {
		if (!String.prototype.trim) {
			(function() {
				//Quitamos los espacios y los carácteres extra que se puedan añadir por la codificación.
				var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
				String.prototype.trim = function() {
					return this.replace(rtrim, '');
				};
			})();
		}

		[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
			//Miramos todos los inputs para ver que no estén vacios
			if( inputEl.value.trim() !== '' ) {
				classie.add( inputEl.parentNode, 'input--filled' );
			}

			// eventos:
			inputEl.addEventListener( 'focus', onInputFocus );
			inputEl.addEventListener( 'blur', onInputBlur );
		} );
		/*Añadimos la clase filled al entrar en el input ya que en teoría se escribirá en él, esta clase
		 mantendrá el label del input desplegado.*/
		function onInputFocus( ev ) {
			classie.add( ev.target.parentNode, 'input--filled' );
		}
		
		//Al quitar el foco del input, si está vacio quitamos la clase filled y el label volverá a meterse en el input.
		function onInputBlur( ev ) {
			if( ev.target.value.trim() === '' ) {
				classie.remove( ev.target.parentNode, 'input--filled' );
			}
		}
	})();
});