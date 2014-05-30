<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Administrador</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inicio de Sesión</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo base_url();?>admin/login" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <img src="<?php echo base_url();?>images/logo.png" alt="OfferMalls" width="100%">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="contrasena" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->                                
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>

</html>
