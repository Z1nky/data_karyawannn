<!DOCTYPE html>
<html lang="en">
<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
</head>
<body>
    <?php 
        include_once("../conf/koneksi.php");
        $idkaryawan = $_POST['idkaryawan'];
        $editkaryawan = mysqli_query($db, "SELECT * FROM karyawan WHERE Id_Karyawan=$idkaryawan");
        $view = mysqli_fetch_array($editkaryawan);

        if(isset($_POST['ubahkaryawan'])){
            $idkaryawan = $_POST['idkaryawan'];
            $iddepartment = $_POST['iddepartment'];
            $idbranch = $_POST['idbranch'];
            $idbank = $_POST['idbank'];
            $namakaryawan = $_POST['namakaryawan'];
            $alamat = $_POST['alamat'];

            $query = mysqli_query($db, "UPDATE karyawan SET Id_Departemen='$iddepartment',Id_Branch='$idbranch',Id_Bank='$idbank',Nama='$namakaryawan',Alamat='$alamat' WHERE Id_Karyawan = '$idkaryawan'");
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