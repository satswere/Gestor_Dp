<?php
$accion = $_POST['accion'];
$dale = "";

if($accion ="agregar_carrito"){

  $id = (int)$_POST['id'];
  $nombre = $_POST['nombre'];
  $precio =(int) $_POST['precio'];
  $cantidad =(int) $_POST['cantidad'];
  $id_venta =(int) $_POST['id_venta'];
  $total = $cantidad * $precio;

  include("../../public/inc/conexion.php");
  $select_query = "SELECT * FROM `d_ventas` WHERE id_venta=$id_venta and id_producto=$id";
  $result = mysqli_query($conn, $select_query);

  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $valor =$row['id_producto'];
        $id_cambio =$row['idd_ventas'];
      if($valor == $id){
        $cambio = true;
        $cantidad = $cantidad + $row['amount'];}
        else{ $cambio = false; }
  }

  //si hace el cambio o si no se agrega un nuevo
if($cambio === true){
  $total = $cantidad * $precio;
  mysqli_query($conn,"UPDATE `d_ventas` SET `amount` = '$cantidad', `total` = '$total' WHERE `d_ventas`.`idd_ventas` = $id_cambio");
}else{
  $total = $cantidad * $precio;
  mysqli_query($conn,"INSERT INTO `d_ventas` (`idd_ventas`, `id_producto`, `product_name`, `unit_price`, `amount`, `total`, `id_venta`) VALUES (NULL, '$id', '$nombre', '$precio', '$cantidad', '$total', '$id_venta')");
}
$conn->close();
}

if($accion ="pagar_productos"){
  include("../../public/inc/conexion.php");
  $nombre = $_POST['nombre'];
  $direccion = $_POST['direccion'];
  $total = $_POST['total'];
  $fecha = $_POST['fecha'];
  $id_venta =(int) $_POST['id_venta'];
  mysqli_query($conn,"UPDATE `ventas` SET `client_name` = '$nombre', `address` = '$direccion ', `total` = '$total', `date` = '$fecha' WHERE `ventas`.`id_venta` = $id_venta");
  // mysqli_query($conn,"INSERT INTO `ventas` (`id_venta`, `client_name`, `address`, `total`, `date`) VALUES (NULL, NULL, NULL, NULL, NULL)");
  $conn->close();
  //$dale = "si";
  
}

if($dale === "si"){
  include("../../public/inc/conexion.php");

  $select_query123 = "INSERT INTO `ventas` (`id_venta`, `client_name`, `address`, `total`, `date`) VALUES (NULL, NULL, NULL, NULL, NULL)";
  $resultado = mysqli_query($conn, $select_query123);
 $conn->close();
 $dale = "";
}

echo json_encode($respuesta);
?>