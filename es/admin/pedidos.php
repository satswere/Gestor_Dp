<!doctype html>
<html lang="en">
  <head>
		<!-- estilos de ccs de la pagina -->
  	<title>admin</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="../../public/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- css necesario de la plantilla-->
	<?php
		include '../../public/inc/template/header.php';
	?>
<body>
	<div class="wrapper d-flex align-items-stretch">
	<?php
 		// carga del menu
		include '../../public/inc/template/menu.php';
	?>
        <!--Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<!-- Inico del contenido de la seccion -->
			<h2>listado de pedidos</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>direccion</th>
                  <th> total</th>
                  <th>Hora</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php
  include("../../public/inc/conexion.php");
      $select_query = "SELECT * FROM `ventas` WHERE `estado` = 0";
    $result = mysqli_query($conn, $select_query);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo'
        <tr>
        <td>'.$row["id_venta"].'</th>
        <td>'.$row["client_name"].'</th>
        <td>'.$row["address"].'</td>
        <td>'.$row["total"].' $</td>
        <td>'.$row["date"].'</td>
        <td>  <a href="" class="btn btn-sm btn-success">enviar </span></a>    <a href="" class="btn btn-sm btn-warning">produccion <span class="fa fa-edit"> </span> </>
      </tr>
        '; 
    }
  ?>
  </tbody>
            </table>
          </div>


			<!-- Fin del contenido de la seccion -->
		</div>
	</div>
</body>
  <?php
  //archivos necesario del template
include '../../public/inc/template/footer.php';
?>
</html>