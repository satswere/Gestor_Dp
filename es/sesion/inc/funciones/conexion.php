<?php

$conn = new mysqli('localhost', 'root', 'adminadmin', 'bd_gestor_dp');

if($conn->connect_error){
    echo $conn->connect_error;
}

$conn->set_charset('utf8');