<?php
class datos{
   public static function enviar(){

	if(!empty($_POST["guardar"])) {

  // $conn = mysqli_connect("localhost","root","", "php_dinamico");
echo  $contador = count($_POST["pro_nombre"]);

		// $ProContador=0;
		// $query = "INSERT INTO productos (ProNombre,ProPrecio,ProCantidad) VALUES ";
		// $queryValue = "";
		// for($i=0;$i<$contador;$i++) {
		// 	if(!empty($_POST["pro_nombre"][$i]) || !empty($_POST["pro_precio"][$i]) || !empty($_POST["pro_cantidad"][$i])) {
		// 		$ProContador++;
		// 		if($queryValue!="") {
		// 			$queryValue .= ",";
		// 		}
		// 		$queryValue .= "('" . $_POST["pro_nombre"][$i] . "', '" . $_POST["pro_precio"][$i] . "', '" . $_POST["pro_cantidad"][$i] . "')";
		// 	}
		// }
		// $sql = $query.$queryValue;
		// if($ProContador!=0) {
		//     $resultadocon = mysqli_query($conn, $sql);
		// 	if(!empty($resultadocon)) $resultado = " <br><ul class='list-group' style='margin-top:15px;'>
  //  <li class='list-group-item'>Registro(s) Agregado Correctamente.</li></ul>";
		// }
	}
  }
  }
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Inputs dinamicos dinamicos usando jQuery y PHP - BaulPHP</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">
<script src="assets/jquery-1.12.4-jquery.min.js"></SCRIPT>
<script src="assets/jquery.validate.min.js"></SCRIPT>

<script>
function AgregarMas() {
	$("<div>").load("InputDinamico.php", function() {
			$("#productos").append($(this).html());
 
	});	
}


function BorrarRegistro() {
	$('div.lista-producto').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</script>

</head>

<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">BaulPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Inputs dinamicos dinamicos usando jQuery y PHP</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      


<FORM name="frmProduct" method="post" action="">
<div id="outer">
<div id="header">
<div class="float-left">&nbsp; Nro.</div>
<div class="float-left col-heading"> Nombre</div>
<div class="float-left col-heading2"> Precio</div>
<div class="float-left col-heading2"> Cantidad</div>
</div>
<div id="productos">
<?php require_once("InputDinamico.php") ?>
</div>


<div class="btn-action float-clear">
<input class="btn btn-success" type="button" name="agregar_registros" value="Agregar Mas" onClick="AgregarMas();" />
<input class="btn btn-danger" type="button" name="borrar_registros" value="Borrar Campos" onClick="BorrarRegistro();" />
<span class="success"><?php if(isset($resultado)) { echo $resultado; }?></span>
</div>
<div style="position: relative;">
<input class="btn btn-primary" type="submit" name="guardar" value="Guardar Ahora" />

<?php 
$datos = new datos();
$datos -> enviar();

 ?>
</div>
</div>
</form>


      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 

  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p>
    </span> </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>