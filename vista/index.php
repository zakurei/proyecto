<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="css/estilo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  </head>
  <body>
  <?php include_once "../partes/newfile.php";?>
<div class="container">
  <div class="row">
		<div class="alert alert-success" role="alert">...</div>
		<div class="alert alert-info" role="alert">...</div>
		<div class="alert alert-warning" role="alert">...</div>
		<div class="alert alert-danger" role="alert">...</div>
   </div>
    <div class="row">
        <div class="col-md-12" id="contIndex">
            <h1>Iniciar Sesión</h1>
            <form class="form-horizontal" role="form" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="login">Login</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="login" name="login" placeholder="Enter Login">
                  
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Contraseña</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter Contraseña">
                        
                    </div>
                </div>
                
                
                    <div class="form-group captcha">
                        <!-- <img class="col-sm-2" src="vistas/captcha.php" title="CAPTCHA" alt="CAPTCHA">-->
                        <label class="control-label col-sm-2" for="captcha">Captcha</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Enter Captcha">

                        </div>
                    </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" name="access">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>