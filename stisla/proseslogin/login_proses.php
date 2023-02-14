<?php
    session_start();
    include('../conf/koneksi.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($db,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    if (mysqli_num_rows($query)){
        header('location: ../index.php');
    }
    else if($username == '' || $password == ''){
        header('location: ../../index.php?error=2');
    }else {
        header('location: ../../index.php?error=1');
    }

?>