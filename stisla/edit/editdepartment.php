<!DOCTYPE html>
<html lang="en">
<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
</head>
<body>
    <?php 
        include_once("../conf/koneksi.php");
        $iddepartment = $_POST['iddepartment'];
        $editdepartment = mysqli_query($db, "SELECT * FROM departemen WHERE Id_Departemen=$iddepartment");
        $view = mysqli_fetch_array($editdepartment);

        if(isset($_POST['ubahdepartment'])){
            $iddepartment = $_POST['iddepartment'];
            $kodedepartment = $_POST['kodedepartment'];
            $namadepartment = $_POST['namadepartment'];
            $alamatdepartment = $_POST['alamatdepartment'];

            $query = mysqli_query($db, "UPDATE departemen SET Id_Departemen='$iddepartment',Kode_Departemen='$kodedepartment',Nama_Departemen='$namadepartment',Alamat_Departemen='$alamatdepartment' WHERE Id_Departemen = '$iddepartment'");
            echo "   <script>  Swal.fire({
                title: 'Success!',
                text: 'Successfully Edit Karyawan',
                icon: 'success',
                confirmButtonTex :'Oke!'
            });  
                setTimeout(function(){window.location='../table/karyawan.php'} , 2000);
        
                </script>";
        }
            ?>
    
</body>
</html>