<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>El Gordo</title>

        <!-- Custom fonts for this template-->
        <link href="http://localhost/veterinaria/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="http://localhost/veterinaria/assets/css/sb-admin-2.css" rel="stylesheet">
        <script src="http://localhost/veterinaria/assets/js/login.js"></script>

    </head>

    <body class="bg-gradient-primary">

        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Crea una cuenta</h1>
                                </div>
                                <form class="user" action="http://localhost/veterinaria/index.php/Cacceso/reg_usuario" method="post">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="alias" name="alias" placeholder="Inserte un alias para la cuenta">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Correo electronico">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="cargo" id="cargo" class="form-control form-control-slc">
                                            <option>Seleccionar cargo</option>
                                            <?php 
                                            foreach($lista_cargo as $cargo){
                                                $id_cargo=$cargo->id_cargo;
                                                $cargo=$cargo->cargo;
                                            ?>
                                            <option value="<?php echo $id_cargo;?>"><?php echo $cargo;?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Contraseña">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" placeholder="Confirmar contraseña" id="password_rep" name="password_rep" onkeyup="validarPass(this.value);">
                                        </div>
                                        <div id="msj_pass"></div>
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Registrar cuenta">
                                    <input type="button" class="btn btn-danger btn-user btn-block" value="Cancelar" onclick="history.back()">
                                    <hr>
                                    <!--                <a href="index.html" class="btn btn-google btn-user btn-block">
<i class="fab fa-google fa-fw"></i> Register with Google
</a>
<a href="index.html" class="btn btn-facebook btn-user btn-block">
<i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
</a>-->
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="http://localhost/veterinaria/assets/vendor/jquery/jquery.min.js"></script>
        <script src="http://localhost/veterinaria/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="http://localhost/veterinaria/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="http://localhost/veterinaria/assets/js/sb-admin-2.min.js"></script>

    </body>

</html>
