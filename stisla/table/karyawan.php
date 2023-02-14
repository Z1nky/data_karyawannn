
    <!DOCTYPE html>
    <html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>General Dashboard &mdash; Stisla</title>

        <!-- General CSS Files -->
        <link rel="stylesheet" href="../dist/assets/modules/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../dist/assets/modules/fontawesome/css/all.min.css">

        <!-- CSS Libraries -->
        <link rel="stylesheet" href="../dist/assets/modules/jqvmap/dist/jqvmap.min.css">
        <link rel="stylesheet" href="../dist/assets/modules/weather-icon/css/weather-icons.min.css">
        <link rel="stylesheet" href="../dist/assets/modules/weather-icon/css/weather-icons-wind.min.css">
        <link rel="stylesheet" href="../dist/assets/modules/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="../dist/assets/modules/prism/prism.css">

        <link rel="stylesheet" href="../dist/assets/modules/datatables/datatables.min.css">
        <link rel="stylesheet" href="../dist/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../dist/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

        <!-- Template CSS -->
        <link rel="stylesheet" href="../dist/assets/css/style.css">
        <link rel="stylesheet" href="../dist/assets/css/components.css">
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
                <img alt="image" src="../dist/assets/img/kurumi.jpg" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Tokisaki Kurumi</div></a>
                <div class="dropdown-menu dropdown-menu-right">
                <a href="../profile.php" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="../logout.php" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                </div>
            </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="../index.php">U N I O N</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="../index.php">U</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="dropdown">
                <a href="index.php" class="nav-link has-dropdown"><i class="fas fa-warehouse"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="../index.php">Tampil Semua</a></li>
                </ul>
                </li>
                <li class="menu-header">Menu</li>
                <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-table"></i> <span>Pilih Table</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="karyawan.php">Karyawan</a></li>
                    <li><a class="nav-link" href="department.php">Department</a></li>
                    <li><a class="nav-link" href="bank.php">Bank</a></li>
                    <li><a class="nav-link" href="branch.php">Branch</a></li>
                </ul>
                </li>
            </aside>
        </div>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Karyawan</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modaltambah" name="tambah"><i class="fas fa-plus"> Tambah</i></button>
                    </div>
                    
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-1">
                                        <thead>                                
                                        <tr>
                                            <th>No</th>
                                            <th>Id Karyawan</th>
                                            <th>Id Department</th>
                                            <th>Id Branch</th>
                                            <th>Id Bank</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th><center>Action</center></th>
                                        </tr>
                                        </thead>
                                        <tbody>     
                                                                
                                        <?php
                                            include_once("../conf/koneksi.php");
                                            $i = 0;
                                            $query = mysqli_query($db, "select * from karyawan");
                                            while($karyawan = mysqli_fetch_array($query)) {
                                            $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $karyawan['Id_Karyawan'];?></td>
                                            <td><?php echo $karyawan['Id_Departemen'];?></td>
                                            <td><?php echo $karyawan['Id_Branch'];?></td>
                                            <td><?php echo $karyawan['Id_Bank'];?></td>
                                            <td><?php echo $karyawan['Nama'];?></td>
                                            <td><?php echo $karyawan['Alamat'];?></td>
                                            <td><center><a href="#"  class="btn btn-warning" data-toggle="modal" data-backdrop="false" data-target="#modaledit<?php echo $karyawan['Id_Karyawan']; ?>" name="edit"><i class="fas fa-edit"> Edit</i></a> | 
                                                        <a href="../delete/deletekaryawan.php?Id_Karyawan=<?php echo $karyawan['Id_Karyawan'];?>" class="btn btn-danger" ><i class="fas fa-trash"> Hapus</i></a></center></td>
                                        </tr>
                                        
                                        <!-- Edit  -->
                                        <div class="modal fade" data-backdrop="false" tabindex="-1" role="dialog" id="modaledit<?php echo $karyawan['Id_Karyawan']; ?>">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title">Edit</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>

                                                <form method="POST" action="../edit/editkaryawan.php">
                                                    <div class="modal-body">
                                                    <div class="card">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Id Karyawan</label>
                                                                    <input type="text" class="form-control" placeholder="Id Karyawan" name="idkaryawan" value="<?php echo $karyawan['Id_Karyawan']; ?>" readonly>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Id Department</label>
                                                                    <input type="text" class="form-control" placeholder="Id Department" name="iddepartment" value="<?php echo $karyawan['Id_Departemen']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Id Branch</label>
                                                                    <input type="text" class="form-control" placeholder="Id Branch" name="idbranch" value="<?php echo $karyawan['Id_Branch']; ?>">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Id Bank</label>
                                                                    <input type="text" class="form-control" placeholder="Id Bank" name="idbank" value="<?php echo $karyawan['Id_Bank']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama</label>
                                                                <input type="text" class="form-control" placeholder="Nama" name="namakaryawan" value="<?php echo $karyawan['Nama']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $karyawan['Alamat']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                <div class="modal-footer bg-whitesmoke br">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-warning" name="ubahkaryawan">Update</button>
                                                </div>
                                    
                                            </form>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        <?php
                                        
                                            }
                                        ?>
                                            
                                        </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>


        <footer class="main-footer">
            <div class="footer-left">
            Copyright &copy; 2018 <div class="bullet"></div> Design By <a href=""></a>
            </div>
            <div class="footer-right">
                
            </div>
        </footer>
        </div>
        </div>

        <!-- General JS Scripts -->
        <script src="../dist/assets/modules/jquery.min.js"></script>
        <script src="../dist/assets/modules/popper.js"></script>
        <script src="../dist/assets/modules/tooltip.js"></script>
        <script src="../dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
        <script src="../dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
        <script src="../dist/assets/modules/moment.min.js"></script>
        <script src="../dist/assets/js/stisla.js"></script>
        
        <!-- JS Libraies -->
        <script src="../dist/assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
        <script src="../dist/assets/modules/chart.min.js"></script>
        <script src="../dist/assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="../dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="../dist/assets/modules/summernote/summernote-bs4.js"></script>
        <script src="../dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
        <script src="../dist/assets/modules/jquery-ui/jquery-ui.min.js"></script>
        <script src="../dist/assets/modules/prism/prism.js"></script>

        <script src="../dist/assets/modules/datatables/datatables.min.js"></script>
        <script src="../dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script src="../dist/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
        <script src="../dist/assets/modules/jquery-ui/jquery-ui.min.js"></script>

        <!-- Page Specific JS File -->
        <script src="../dist/assets/js/page/index-0.js"></script>
        <script src="../dist/assets/js/page/components-table.js"></script>
        <script src="../dist/assets/js/page/bootstrap-modal.js"></script>

        <script src="../dist/assets/js/page/modules-datatables.js"></script>
        
        <!-- Template JS File -->
        <script src="../dist/assets/js/scripts.js"></script>
        <script src="../dist/assets/js/custom.js"></script>
        </body>


        <!-- Tambah -->

        <div class="modal fade" tabindex="-1" role="dialog" id="modaltambah">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php
                    include_once("../conf/koneksi.php");
                    $maxid = mysqli_query($db,"select max(Id_Karyawan) as 'idkaryawan1' from karyawan");
                    
                    while($result1 = mysqli_fetch_array($maxid)){
                        $idterakhir = $result1['idkaryawan1'];
                        $tambahid = $idterakhir+1;
                }

                ?>                     
                <form method="POST" action="../add/tambahkaryawan.php">
                    <div class="modal-body">
                        <div class="card">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Id Karyawan</label>
                                    <input type="text" class="form-control" placeholder="Id Karyawan" name="idkaryawan" value="<?php echo $tambahid?>" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Id Department</label>
                                    <input type="text" class="form-control" placeholder="Id Department" name="iddepartment" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Id Branch</label>
                                    <input type="text" class="form-control" placeholder="Id Branch" name="idbranch" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Id Bank</label>
                                    <input type="text" class="form-control" placeholder="Id Bank" name="idbank" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" name="namakaryawan" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
                            </div>
                        </div>
                    </div>  
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
            </div>
        </div>

        <!-- Tambah END-->


        
        
        </html>