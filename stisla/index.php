<?php 
    include_once("conf/koneksi.php");

    //karyawan
    $result = mysqli_query($db,"select count(Id_Karyawan) as 'totalkaryawan' from karyawan"); 
    $i = 1;
    while($user_data = mysqli_fetch_array($result))
            {
                $totalkaryawan = $user_data['totalkaryawan'];
                
            }

    //karyawan
    $result = mysqli_query($db,"select count(Id_Departemen) as 'totaldepartemen' from departemen"); 
    $i = 1;
    while($user_data = mysqli_fetch_array($result))
            {
                $totaldepartemen = $user_data['totaldepartemen'];
                
            }

    //Bank
    $result = mysqli_query($db,"select count(Id_Bank) as 'totalbank' from bank"); 
    $i = 1;
    while($user_data = mysqli_fetch_array($result))
            {
                $totalbank = $user_data['totalbank'];
                
            }

    //Branch
    $result = mysqli_query($db,"select count(Id_Branch) as 'totalbranch' from branch"); 
    $i = 1;
    while($user_data = mysqli_fetch_array($result))
            {
                $totalbranch = $user_data['totalbranch'];
                
            }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="dist/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="dist/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="dist/assets/modules/weather-icon/css/weather-icons.min.css">
    <link rel="stylesheet" href="dist/assets/modules/weather-icon/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="dist/assets/modules/summernote/summernote-bs4.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="dist/assets/css/style.css">
    <link rel="stylesheet" href="dist/assets/css/components.css">
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
        <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg bg-danger"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
            
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="dist/assets/img/kurumi.jpg" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Tokisaki Kurumi</div></a>
                <div class="dropdown-menu dropdown-menu-right">
                <a href="profile/profile.php" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                </div>
            </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.php">U N I O N</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.php">U</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="dropdown active">
                <a href="index.php" class="nav-link has-dropdown"><i class="fas fa-warehouse"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="index.php">Tampil Semua</a></li>
                </ul>
                </li>
                <li class="menu-header">Menu</li>
                <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-table"></i> <span>Pilih Table</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="table/karyawan.php">Karyawan</a></li>
                    <li><a class="nav-link" href="table/department.php">Department</a></li>
                    <li><a class="nav-link" href="table/bank.php">Bank</a></li>
                    <li><a class="nav-link" href="table/branch.php">Branch</a></li>
                </ul>
                </li>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                    <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Karyawan</h4>
                    </div>
                    <div class="card-body">
                        <?php echo "$totalkaryawan";?>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                    <i class="fas fa-hotel"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Department</h4>
                    </div>
                    <div class="card-body">
                        <?php echo "$totaldepartemen";?>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                    <i class="fas fa-money-bill"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Bank</h4>
                    </div>
                    <div class="card-body">
                        <?php echo "$totalbank";?>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                    <i class="fas fa-code-branch"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Branch</h4>
                    </div>
                    <div class="card-body">
                        <?php echo "$totalbranch";?>
                    </div>
                    </div>
                </div>
                </div> 
            </div>
            </section>

            <section class="section">
        <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                <div class="card-header">
                    <h4>TAMPIL SEMUA</h3>
                </div>

                <?php
                include_once("conf/koneksi.php");
                $i = 0;
                ?>

                <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nama Department</th>
                        <th>Nama Branch</th>
                        <th>Nama Bank</th>
                        <th>Alamat </th>
                        <th>Gajih</th>
                        </tr>

                        <?php
                            $query = mysqli_query($db, "SELECT A.Nama AS 'Nama Karyawan',B.Nama_Departemen AS 'Nama Department',
                            C.Nama_branch AS 'Nama Branch', D.Nama_Bank AS 'Nama Bank', A.Alamat AS 'Alamat Karyawan',
                            D.Gaji AS 'Gajih Karyawan' FROM karyawan A 
                            inner join 
                            departemen B 
                            on 
                            A.Id_Departemen = B.Id_Departemen
                            INNER JOIN
                            branch C
                            on A.id_branch = c.id_branch
                            INNER JOIN
                            bank D
                            on A.Id_Bank = D.Id_Bank;");
                            while($tampilsemua = mysqli_fetch_array($query)) {
                            $i++;
                        ?>
                        <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $tampilsemua['Nama Karyawan'];?></td>
                        <td><?php echo $tampilsemua['Nama Department'];?></td>
                        <td><?php echo $tampilsemua['Nama Branch'];?></td>
                        <td><?php echo $tampilsemua['Nama Bank'];?></td>
                        <td><?php echo $tampilsemua['Alamat Karyawan'];?></td>
                        <td><?php echo $tampilsemua['Gajih Karyawan'];?></td>
                        </tr>
                        
                        <?php }
                        ?>
                    </table>
                    </div>
                </div>
                <!-- <div class="card-footer text-right">
                    <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    </nav>
                </div> -->
                </div>
            </div>
            </div>
            </div>
        </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
            Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="dist/assets/modules/jquery.min.js"></script>
    <script src="dist/assets/modules/popper.js"></script>
    <script src="dist/assets/modules/tooltip.js"></script>
    <script src="dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="dist/assets/modules/moment.min.js"></script>
    <script src="dist/assets/js/stisla.js"></script>
    
    <!-- JS Libraies -->
    <script src="dist/assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
    <script src="dist/assets/modules/chart.min.js"></script>
    <script src="dist/assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="dist/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="dist/assets/js/page/index-0.js"></script>
    
    <!-- Template JS File -->
    <script src="dist/assets/js/scripts.js"></script>
    <script src="dist/assets/js/custom.js"></script>
    </body>
    </html>