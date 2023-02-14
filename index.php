<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="stisla/dist/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="stisla/dist/assets/modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="stisla/dist/assets/css/style.css">
    <link rel="stylesheet" href="stisla/dist/assets/css/components.css">

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA --></head>

    <body>
    <div id="app">
        <section class="section">
        <div class="container mt-5">
            <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                <img src="stisla/dist/assets/img/kurumi.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
                </div>

                <div class="card card-danger">
                <div class="card-header"><h4>Login</h4></div>

                <div class="card-body">
                    <form method="POST" action="stisla/proseslogin/login_proses.php" class="needs-validation" novalidate="">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control" name="username">
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        </div>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-lg btn-block" >
                        Login
                        </button>
                    </div>
                    </form>

                </div>
                </div>
                <div class="mt-5 text-muted text-center">
                Don't have an account? <a href="stisla/register.php">Create One</a>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="stisla/dist/assets/modules/jquery.min.js"></script>
    <script src="stisla/dist/assets/modules/popper.js"></script>
    <script src="stisla/dist/assets/modules/tooltip.js"></script>
    <script src="stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="stisla/dist/assets/modules/moment.min.js"></script>
    <script src="stisla/dist/assets/js/stisla.js"></script>
    
    <!-- JS Libraies -->
    <script src="assets/modules/sweetalert/sweetalert.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="assets/js/page/modules-sweetalert.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/modules/izitoast/js/iziToast.min.js"></script>

    <!-- Template JS File -->
    <script src="stisla/dist/assets/js/scripts.js"></script>
    <script src="stisla/dist/assets/js/custom.js"></script>

<?php
    if (isset($_GET['error'])){
        $x =($_GET['error']);
        if($x==1){
        echo "<script>
                var Toast = Swal.mixin({
                toast: true,
                position: 'center-top',
                showConfirmButton: false,
                timer: 3000
            });
                Toast.fire({
                icon: 'error',
                title: 'Login Gagal.'
                })</script>";
        }
        else if($x==2){
            echo "<script>
                    var Toast = Swal.mixin({
                    toast: true,
                        position: 'center-top',
                    showConfirmButton: false,
                    timer: 3000
                });
                    Toast.fire({
                    icon: 'warning',
                    title: 'Silahkan Isi Username dan Password.'
                    })</script>";
            }
        else {
            echo "";
        }

    }
?>
</body>
</html>