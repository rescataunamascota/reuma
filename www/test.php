<?php

$host = 'db';
$user = 'poligran';
$password = 'mascota123';
$db = 'reuma_db';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}
echo 'Succesfully connected to MYSQL';

?>