<?php 
	// En versiones de PHP anteriores a la 4.1.0, debería utilizarse $HTTP_POST_FILES en lugar
	// de $_FILES.
if(isset($_POST['enviar'])){
	$dir_subida = 'documentos_pdf__abg_repository';

	$directorio = is_dir($dir_subida);

   $dir;
   //en caso que el directorio no esté creado (!$directorio) se pasa al proceso de crear uno nuevo
   if (!$directorio) {
      $valor = explode('/',$dir_subida);
      //Se hace un split con el "/" para ver cuantas carpetas hay que crear
      if (sizeof($valor) > 1) {
      	//si el split tiene mas de una direccion, es decir mas de una barra entrará al if
         //se define una variable para almacenar las nuevas direcciones
         $nuevodir = "";
         for ($i=0; $i < sizeof($valor); $i++) {
         	//se hace un for recorriendo los valores del split
            $nuevodir.= $valor[$i]."/";
            //se va concatenando el valor del split con un "/" para poder crear los directorios internos
            $dir = mkdir($nuevodir);
            //se crea el directorio
         }
      }else{
      	//si el split solo tiene una ruta entonces este se crea solo
         $dir = mkdir($dir_subida);
      };
   };
   //si dir no tiene ningun valor (es decir si no se crea el directorio) y si el directorio no existe te mandará el mensaje
   if (!$dir && !$directorio) { echo "no se encuentra el directorio enviado"; return false;}
   //si el directorio existe entonces se procede a subirlo al webservice
	$fichero_subido = $dir_subida . "/".basename($_FILES['fichero_usuario']['name']);
	if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
	    echo '<script language="javascript">alert("Subida de archivo completada con exito");</script>';
		echo "<script>location.href='agregar.php'</script>";
	} else {
	    echo '<script language="javascript">alert("Error desconocido al subir el archivo!");</script>';
	}

	unset($_FILES['fichero_usuario']);
	unset($_POST['enviar']);
}
 ?>
 <?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:ingreso.php");
	}else if ($_SESSION['user']) {
		header("Location:");
	}
	?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Agregar</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


  
  <link rel='stylesheet prefetch' href='css/d.css'>
<link rel='stylesheet prefetch' href='css/a.css'>
<link rel='stylesheet prefetch' href='css/c.css'>

      <link rel="stylesheet" href="css/style2.css">

  
</head>

<body class="c">
  <div class="container">

    <form class="well form-horizontal" id="contact_form" enctype="multipart/form-data" action="" method="POST">
<fieldset>

<!-- Form Name -->
<legend>AGREGAR UN NUEVO ARCHIVO<div align="right"><button class=""><a href="menu.php">VOLVER</a></button></div></legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Código</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
  <input  name="first_name" placeholder="doc1" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Text input-->
<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Área</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Seleccione una area del caso</option>
      <option >Derecho empresarial y litigios comerciales</option>
      <option >Derecho penal</option>
      <option >Litigios civiles</option>
	  <option >Comercial</option>
	  <option >Procesal</option>
	  <option >Ambiental</option>
      <option >Planificación del patrimonio</option>
      <option >Inmigración</option>
	  <option >Leyes de propiedad intelectual</option>
      <option >Lesiones personales</option>

    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Nombre del caso</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
  <input  name="first_name" placeholder="Nombre Caso" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Text input-->




<div class="form-group">
  <label class="col-md-4 control-label">Fecha</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input  name="fecha" placeholder="Nombre Caso" class="form-control"  type="date">
 
    </div>
  </div>
</div>

<!-- Text input-->


<div class="form-group">
  <label class="col-md-4 control-label" >Nombre del Juzgado</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Nombre Juzgado" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Nombre del Cliente</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Nombre Cliente" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Correo</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="cliente@gmail.com" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Telefono</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="0994356789" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Direccion</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
  <input name="address" placeholder="La pradera calle 206 ave 26" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Ciudad</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
  <input name="city" placeholder="Manta" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Provincia</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Porfavor selecciona una provincia</option>
      <option >Azuay</option>
      <option >Bolívar</option>
      <option >Cañar</option>
	  <option >Carchi</option>
      <option >Chimborazo</option>
      <option >Cotopaxi</option>
	  <option >El Oro</option>
      <option >Esmeraldas</option>
	  <option >Galápagos</option>
      <option >Guayas</option>
      <option >Imbabura</option>
      <option >Loja</option>
      <option >Los Ríos</option>
      <option >Manabí</option>
      <option >Morona-Santiago</option>
      <option >Napo</option>
      <option >Orellana</option>
      <option >Pataza</option>
      <option> Pichincha</option>
      <option >Santa Elena</option>
      <option >Santo Domindo de los Tsáchilas</option>
      <option >Sucumbios</option>
      <option >Tungurahua</option>
      <option >Zamora Chinchipe</option>
     
    </select>
  </div>
</div>
</div>



<!-- Text input-->
<br><br>
<div class="form-group">
  <label class="col-md-4 control-label">Seleccionar archivo</label>  
      <input name="fichero_usuario" type="file" />
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  
    </div>
  </div>
</div>
<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Descripcion del caso</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Descripcion opcional"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    <button type="submit" class="btn btn-warning" name="enviar">Guardar <span class="glyphicon glyphicon-send"></span></button>
  </div>
  
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

    <script src="js/index1.js"></script>

</body>
</html>
