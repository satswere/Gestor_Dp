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
<body class="">
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
  <div class="card-header bg-danger text-light">
    Agregar nuevo producto
  </div>
  <div class="card-body">
    <h5 class="card-title">datos del nuevo preducto</h5>
    <p class="card-text">
	<form class="was-validated" id="formulario_comida">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer01">Nombre:</label>
      <input type="text" class="form-control is-valid" id="name" placeholder="pizza con piña" required>
     <!--  <div class="valid-feedback">
        Looks good!
      </div> -->
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationServer02">Precio:</label>
      <input type="text" class="form-control is-valid" id="price" placeholder="100" required>
      <!--  <div class="valid-feedback">
        Looks good!
      </div> -->
    </div>
  </div>
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="picture">
  <label class="custom-file-label" for="picture">Seleccione una imagen</label>
</div>
  <div class="form-row">
  <label for="validationTextarea" >Descripcion:</label>
    <textarea class="form-control is-invalid" id="description" placeholder="es una pizza con piña, orillas de queso y muy rica" required></textarea>
  <!--  <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>-->
  </div>
  <input class="btn float-right mt-4" style="background-color: #ff873d;" type="submit" id="enviar" placeholder="Confirmar">Confirmar</input>
</form>
	</p>
  </div>
</div>
<div class="card">
  <div class="card-header bg-danger text-light">
    productos en existencia
  </div>
  <div class="card-body">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">precio</th>
      <th scope="col">descripcion</th>
      <th scope="col">acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include("../../public/inc/conexion.php");
      $select_query = "SELECT * FROM `product`";
    $result = mysqli_query($conn, $select_query);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo'
        <tr>
        <th scope="row">'.$row["name_product"].'</th>
        <td>'.$row["price"].'</td>
        <td>'.$row["descriptions"].'</td>
        <td>   <a href="" class="btn btn-sm btn-danger">borrar <span class="fa fa-trash"> </span></a>    <a href="" class="btn btn-sm btn-warning">modificar <span class="fa fa-edit"> </span></a>
      </tr>
        '; 
    }
  ?>
  </tbody>
</table>
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