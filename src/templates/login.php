<?php
/*    if (isset($contexto['mensaje'])){
        echo $contexto['mensaje'];
    }
*/?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/modern-business.css" rel="stylesheet">

    <!-- Mi css -->
    <link href="../../css/micss.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4">

            <!-- Login -->
            <div class="container login-container">
                <div class="row">
                    <div class="col-md-6 login-form-1">
                        <h3>Acceder</h3>
                        <form method="post" action="" id="formularioLogin" >
                            <div class="form-group">
                                <input id="name" name="name" type="text" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Clave *" value="" />
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Recordar
                                </label>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Acceder" />
                            </div>
                            <div class="form-group">
                                <a href="#" class="Register">Nuevo usuario - Registrar </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
