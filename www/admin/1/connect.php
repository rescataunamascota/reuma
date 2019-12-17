<?php
$connection = mysqli_connect('localhost', 'reuma', 'tiz%F6bTUikbWQ');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'test');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}