<?php
// CONEXCION MYSQL
	
	$hostname="localhost";
	$username="reuma";
	$password="tiz%F6bTUikbWQ";
	$dbname="reuma";
	//$usertable="admins";
	
	mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	mysql_select_db($dbname);


// VERIFICAR SI SE HIZO SUBMIT
if (isset($_POST['submit']))
{
    $uemail = mysqli_real_escape_string($con, $_POST['email']);
    $upwd = mysqli_real_escape_string($con, $_POST['clave']);
    $result = mysqli_query($con, "SELECT * FROM admins WHERE email = '" . $uemail. "' and password = '" . md5($upwd) . "'");

    if (mysqli_num_rows($result) > 0)
    {
        // EXITO EN LOGIN ENVIAR AL HOME DEL ADMIN
        
        $row = mysqli_fetch_array($result);

        //session_start();
        //$_SESSION['user_id'] = $row['id'];
        //$_SESSION['user_name'] = $row['nombre'];
        header("Location: home.php");
    }
    else
    {
        // LOGIN EXITOSO
        header("Location: index.php?err=true");
    }
}
?>

