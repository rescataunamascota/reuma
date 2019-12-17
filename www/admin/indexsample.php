<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Login Form Example using PHP & MySQL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="bootstrap.css" type="text/css" />
    
    <style type="text/css">
    #login-form .input-group, #login-form .form-group {
        margin-top: 30px;
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
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form id="login-form" method="post" action="login.php" role="form">
                        <legend>Bootstrap Login</legend>
                        <?php if (isset($_GET['err'])) { ?>
                        <div class="alert alert-danger text-center"><?php echo "Login failed! Invalid email-id or password!"; ?></div>
                        <?php } ?>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="text" name="email" placeholder="Enter your email-id" required class="form-control" />
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" required class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block" />
                        </div>
                        <div class="form-group">
                            <hr/>
                            <div class="col-sm-6" style="padding: 0;">New user? <a href="#">Sign Up here</a></div>
                            <div class="col-sm-6 text-right brand" style="padding: 0;">kodingmadesimple.com</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>