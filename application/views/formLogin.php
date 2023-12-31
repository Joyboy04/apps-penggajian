<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>/css/sb-admin-2.min.css" rel="stylesheet">
    
    <style>
        .password-icon {
            position: relative;
        }

        .password-icon i {
            position: absolute;
            top: 35%;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h2 text-gray-900 mb-3"><b>Aplikasi Penggajian</b></h1>
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo base_url('welcome') ?>">
                                    <?php echo $this->session->flashdata('pesan') ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Enter username..." name="username">
                                                <?php echo form_error('username','<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <div class="form-group password-icon">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Enter Password..." name="password">
                                                <?php echo form_error('password','<div class="text-small text-danger"></div>') ?>
                                            <i class="far fa-eye" onclick="togglePassword()"></i>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        </a>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>/js/sb-admin-2.min.js"></script>

    <!-- JavaScript to toggle password visibility -->
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("exampleInputPassword");
            var eyeIcon = document.querySelector(".password-icon i");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.className = "far fa-eye-slash";
            } else {
                passwordField.type = "password";
                eyeIcon.className = "far fa-eye";
            }
        }
    </script>
</body>
</html>
