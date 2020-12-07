<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="./public/favicon.ico"> -->

    <title>Gestor DP</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="./public/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./public/dist/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <h1 class="text-center text-dark">Gestor Dp</h1>
    
    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-md btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-md btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-md btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
<!-- this part is for menu-->
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./admin/dashboard.html">ir al admin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./repartidor/index.html">ir al repartidor</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>1
      <!-- Button trigger modal -->
<a type="button" class="btn" data-toggle="modal" data-target="#staticBackdrop">
<img src="./public/dist/images/cart.png" id="img-carrito">
</a>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"> Carrito De Compras 
        <?php
          include("public/inc/conexion.php");
          $inicial = mysqli_query($conn,"SELECT COUNT(id_venta) FROM ventas");
          if($folio_venta = mysqli_fetch_array($inicial)){
            $sumar = (int) $folio_venta[0];
            echo 'folio de venta: '.$folio_venta[0].'</td>';
          }
        ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">precio</th>
      <th scope="col">cantidad</th>
      <th scope="col">total</th>
    </tr>
  </thead>
  <tbody id="tabla_carrito">
  <?php
      $select_query = "SELECT * FROM d_ventas where id_venta=$sumar";
    $result = mysqli_query($conn, $select_query);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo'
        <tr>
        <th scope="row">'.$row["product_name"].'</th>
        <td>'.$row["unit_price"].'</td>
        <td>'.$row["amount"].'</td>
        <td>'.$row["total"].'</td>
      </tr>
        ';
        $total_pagar = $total_pagar + $row["total"];
      
    }
  ?>
  </tbody>
</table>
<div class="card">
  <div class="card-header">
    datos
  </div>
  <div class="card-body">
    <form action="" class="">
      <h4>Nombre completo</h4>
      <input type="text" id="nombre_cliente" placeholder="Nombre completo">
      <h4>Direccion De Envio</h4>
      <textarea id="direccion_cliente" cols="30" rows="10" placeholder="direccion"></textarea>
      <input type="hidden" id="total_cliente" value="<?php echo $total_pagar?>">
    </form>
  </div>
  <div class="card-footer">
    <div class="row">
      <div class="col-6">El total a pagar es de: </div>
      <div class="col-6"><h5><?php echo $total_pagar?> $ Mexicanos</h5></div>
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer" id="envio_pagar">
        <a href="#" class="btn btn-primary pagar">Pagar</a>
      </div>
    </div>
  </div>
</div>
    </form>
  </div>
</nav>
      <div class="container marketing">
      <div id="lista_menu" class="container">
  <div class="row row-cols">
  <input type="hidden" id="actual_venta" value="<?php echo $sumar?>">
    <?php
    $select_query = "SELECT * FROM product";
    $result = mysqli_query($conn, $select_query);
    
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo'
          <div class="col-12 col-md-4">
    <div class="card text-center">
      <div class="card-header">'.$row["name_product"].'</div>
      <img src="public/dist/images/hey.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">precio: '.$row["price"].' $ mxn</h5>
        <p class="card-text">'.$row["descriptions"].'</p>
        <input type="hidden" id="name" value="'.$row["name_product"].'">
        <input type="hidden" id="price" value="'.$row["price"].'">
        <input type="hidden" id="description" value="'.$row["descriptions"].'">
        <a href="#" class="btn btn-primary agregar_carrito" data-id="'.$row['id_product'].'">Agregar carrito</a>
      </div>
    </div>
    </div>
        ';
    }
    ?>
  </div>
</div>
      </div><!-- /.container -->
      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./public/assets/js/vendor/popper.min.js"></script>
    <script src="./public/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./public/assets/js/vendor/holder.min.js"></script>
    <script src="./es/index/registro_index.js"></script>
  </body>
</html>
