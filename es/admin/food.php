<!doctype html>
<html lang="en">
  <head>
		<!-- estilos de ccs de la pagina -->
	  <title>admin</title>
	<!-- <img src="../../index.html" alt="">-->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="../../public/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- css necesario de la plantilla-->
	<?php
		include '../../public/inc/template/header.php';
	?>
<body class="bg-danger">
	<div class="wrapper d-flex align-items-stretch">
	<?php
 		// carga del menu
		include '../../public/inc/template/menu.php';
	?>
        <!--Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<!-- Inico del contenido de la seccion -->
				<div class="container">

				<div class="card bg-light mb-3" >
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">
	<form class="was-validated" id="formulario_comida">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer01">First name</label>
      <input type="text" class="form-control is-valid" id="name" placeholder="name" required>
     <!--  <div class="valid-feedback">
        Looks good!
      </div> -->
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationServer02">Last name</label>
      <input type="text" class="form-control is-valid" id="price" placeholder="price" required>
      <!--  <div class="valid-feedback">
        Looks good!
      </div> -->
    </div>
  </div>
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="picture">
  <label class="custom-file-label" for="picture">Choose file</label>
</div>
  <div class="form-row">
  <label for="validationTextarea" id="description">Textarea</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
  <!--  <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>-->
  </div>
  <input class="btn btn-primary" type="submit" id="enviar" placeholder="Submit form">
</form>
	</p>
  </div>
</div>
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
				</div>	

			<!-- Fin del contenido de la seccion -->
		</div>
	</div>
</body>
  <?php
  //archivos necesario del template
include '../../public/inc/template/footer.php';
?>

<script src="./js/formulario.js"></script>
</html>