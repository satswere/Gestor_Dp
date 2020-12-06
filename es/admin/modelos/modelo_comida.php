<?php
$accion = $_POST['accion'];

if($accion ===  "ingresar_comida"){
  //obtener variables
  $name = $_POST['name'];
$price =(int) $_POST['price'];
$picture = $_POST['picture'];
$description = $_POST['description'];
//ejecucion de codigo

  include("../../../public/inc/conexion.php");
  //mysqli_query($link,"INSERT INTO product (name_product, price,descriptions,img)value('$Fecha','$nombre','$apellidopat','$apellidomat','$direccion',$telefono,'$puesto','$tipo_cuenta','$usuario','$contra','$destino')");
  mysqli_query($conn,"INSERT INTO `product` (`id_product`, `name_product`, `price`, `descriptions`, `img`) VALUES (NULL, '$name', '$price', '$description', '$picture')");

  $respuesta = array( 
    'respuesta' => 'correcto',
    'estado' => 'ingresado_menu'
  );
  echo json_encode($respuesta);
}
 ?>