var vacio =  /^\s*$/;
var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

$(document).ready(function(){
	$("#usuario").blur(function(){
		if (vacio.test($("#usuario").val()) == true ){
			$(".usuario").css("color","red");
			}else{
			$(".usuario").css("color","green")
		}
	});

	$("#email").blur(function(){
		if (email.test($("#email").val()) == false || vacio.test($("#email").val() == true)){
			$(".email").css("color","red");
			}else{
			$(".email").css("color","green")
		}
	});

	$("#password").blur(function(){
		if (vacio.test($("#password").val()) == true){
			$(".password").css("color","red");
			}else{
			$(".password").css("color","green")
		}
	});	
	
	
	
	
	/* Evitamos que el texto que se mueve de los inputs no vuelva a introducirse dentro de
	los inputs al quitar el foco del input.*/
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
});

