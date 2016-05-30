<?php
if (isset ( $_SESSION ['logueado'] ) && $_SESSION ['logueado'] == false) {
	header ( "Location: ../index.php" );
} 
?>