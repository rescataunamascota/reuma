
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['email'])) {
  $loginUsername=$_POST['email'];
  $password=$_POST['clave'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "home.php";
  $MM_redirectLoginFailed = "error.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_reuma, $reuma);
  
  $LoginRS__query=sprintf("SELECT email, clave FROM admins WHERE email=%s AND clave=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $reuma) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ADMINISTRADOR R.E.U.M.A.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
	  <!-- LINKS A BOOTSTRAP CORE CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 <!-- LINKS A HOJA DE ESTILOS -->
  <link href="../css/reuma.css" rel="stylesheet">
    
    <style type="text/css">
    #login-form .input-group, #login-form .form-group {
        margin-top: 10px;
    }
    
    #login-form .btn-default {
        background-color: #EEE;
    }
    
    .brand {
        color: #CCC;
    }
    </style>
</head>
<body>
<div class="container" style="margin-top: 30px;">

    <div class="col-6" style="margin: auto; max-width: 450px;">
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="<?php echo $loginFormAction; ?>" method="post" class="text-center" id="login-form"  role="form">
				  <img src="../images/logo-horizontal-admin.jpg" width="450" height="147" alt=""/>
<div class="input-group">
            <div class="input-group">
                      <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="text" name="email" placeholder="Email de usuario" required class="form-control" id="email"/>
                      </div>
            </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input type="password" name="clave" placeholder="Contraseña" required class="form-control" id="clave" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Ingresar" class="btn btn-primary btn-block " />
                    </div>
                    <div class="form-group">
                        <hr/>
                        <div class="col-sm-6" style="padding: 0;"><a href="#">Olvidaste tu contraseña?</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><a href="../admin">admin</a>
</body>
</html>