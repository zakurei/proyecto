<?php
?>

<!-- La mayor parte de metas y link están agregados para usar material design lite -->
<link rel="shortcut icon" href="images/logo.png" type="image/png"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

<link href='https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.grey-orange.min.css">
<link rel="stylesheet" href="css/styles.css">

<script src="js/material.min.js"></script>
<script src="js/material.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
	var migas = $(document).find("title").text();

	 $('#breadCrumb').html(migas);
	 
});
</script>
