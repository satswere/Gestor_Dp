<?php

include ('./conexion.php');

$select_query = "SELECT * FROM product";
$result = mysqli_query($conn, $select_query);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "id:" . $row['id_product'] . "<br/>";
    echo "name:" . $row['name_product'] . "<br/>";
    echo "price:" . $row['price'] . "<br/>";
    echo "description:" . $row['descriptions'] . "<br/>";
    echo "img:" . $row['img'] . "<br/>";
    echo "<br/>";
}

/*
function obtenerProyectos(){
    include './conexion.php';
    try{
      return $conn->query("SELECT * FROM product");
    }catch(Exception $e){
      echo "Error! :" . $e->getMessage();
      return false;
    }
  }*/

?>