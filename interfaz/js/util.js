/*Validacion de campos en el registro y login*/
var vacio =  /^\s*$/;
var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

$(document).ready(function(){

	//Ponemos el botón del registro y el login disabled
	$("#registrar").attr("disabled",true);
	$(".login").attr("disabled",true);
	
	//Validación Usuario
	$("#usuario").blur(function(){
		//Miramos que no esté vacío
		if (vacio.test($("#usuario").val()) == true ){
			$(".usuario").css("color","red");
			$("#usuarioError").show();
			$("#usuarioError").text("El usuario no puede estar vacío");
			$("#registrar").attr("disabled",true);
			$(".login").attr("disabled",true);
			}else{
			$(".usuario").css("color","green");
			$("#usuarioError").hide();
		}
	});

	//Validación email
	$("#email").blur(function(){
		//Miramos que no esté vacío y sea un email correcto
		if (email.test($("#email").val()) == false || vacio.test($("#email").val() == true)){
			$(".email").css("color","red");
			$("#emailError").show();
			$("#emailError").text("El email no puede estar vacio y debe ser un email válido");
			$("#registrar").attr("disabled",true);
			}else{
			$(".email").css("color","green");
			$("#emailError").hide();
		}
	});

	//Validación password
	$("#password").blur(function(){
		//Miramos que no esté vacía
		if (vacio.test($("#password").val()) == true){
			$(".password").css("color","red");
			$("#passwordError").show();
			$("#passwordError").text("La password no puede estar vacía");
			$("#registrar").attr("disabled",true);
			$(".login").attr("disabled",true);
			}else{
			$(".password").css("color","green");
			$("#passwordError").hide();		
		}
	});	
	
	//Validación repetir password
	$("#rePassword").blur(function(){
		//Miramos que no esté vacía
		if (vacio.test($("#rePassword").val()) == true){
			$(".rePassword").css("color","red");
			$("#rePasswordError").show();
			$("#rePasswordError").text("La repetición de contraseña no puede estar vacía");
			$("#registrar").attr("disabled",true);
		
		//Miramos que pass y rePass sean iguales
		}else if (($("#password").val()) != ($("#rePassword").val())){
			$(".rePassword").css("color","red");
			$("#rePasswordError").show();
			$("#rePasswordError").text("Las contraseñas no coinciden");
			$("#registrar").attr("disabled",true);
		}else {
			$(".rePassword").css("color","green");
			$("#rePasswordError").hide();
		}
	});	
	
	//Quitamos el disable de los botones cuando estén todos los campos validados correctamente.
	$("input").blur(function(){
		if (vacio.test($("#usuario").val()) == false
				&& email.test($("#email").val()) == true
				&& vacio.test($("#password").val()) == false
				&& vacio.test($("#rePassword").val()) == false
				&& ($("#password").val()) == ($("#rePassword").val())){
			
			$("#registrar").attr("disabled",false);
			
		} else if (vacio.test($("#usuario").val()) == false
				&& vacio.test($("#password").val()) == false){
			$(".login").attr("disabled",false);
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