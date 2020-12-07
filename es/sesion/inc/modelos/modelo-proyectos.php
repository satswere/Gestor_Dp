<?php

$accion = $_POST['accion'];
$proyecto = $_POST['proyecto'];
$id_user = (int) $_POST['id_user'];
if($accion ===  'crear'){ // agregar usuarios

  //conexion base de datos
  include '../funciones/conexion.php';
  try{
    //consulta a la base de datos
    $stmt = $conn->prepare("INSERT INTO proyectos (nombre, id_user) VALUES(?, ?)");
    $stmt->bind_param('si',$proyecto, $id_user);
    $stmt->execute(); //manda la consulta a la base de datos


    if($stmt->affected_rows > 0){  //si la columna de la tabla ha sido modicada entonces
      $respuesta = array(   //enviar esta respuesta (se puede cambiar)
        'respuesta' => 'correcto',
        'id_proyecto' => $stmt->insert_id,
        'tipo' => $accion,
        'nombre_proyecto' => $proyecto
      );
    }else{
      $respuesta = array(
        'respuesta' => 'error'
      );
    }

    $stmt->close(); //termina la sentencia
    $conn->close(); //termina la conexion

  }catch(Exception $e){
    //tomar la Exception
    $respuesta = array(
      'error' => $e->getMessage()
    );
  }

  echo json_encode($respuesta);
}



 ?>
