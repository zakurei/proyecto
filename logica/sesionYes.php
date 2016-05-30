<?php
if (isset ( $_SESSION ['logueado'] ) && $_SESSION ['logueado']) {
	header ( "Location: ../index.php" );
} 
?>