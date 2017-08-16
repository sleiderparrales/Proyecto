<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ABG_Repository</title>
   <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>

<div class="container">
  <br><br><br><br><br><br><br>
</div>
<div class="form">
  <div class="thumbnail"><img src="images/icono.png" align="top" width="60" height="60"/></div>
  
 
 
  <!--INICIO formulario INGRESO -->
  

     <form action="validar.php" method="post">

	 <input id="textocedula"name="mail"   type="text"     class="validate" required="" title="Porfavor de colocar su Cedula" placeholder="Cedula"  onchange="validarcedula()">
	 <input id="Password" name="pass" type="password" class="validate" required="" title="Porfavor de colocar su contraseña" placeholder="Contraseña">
	 
	<input class="as" type="submit" value="INGRESAR"></center>


    <p class="message">No esta registrado? <a href="registro.html">Crear una cuenta</a></p>
  </form>
   <?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
	
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>

