<?php
    include "Config.php";
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $nama = $_POST['namalengkap'];
    $email = $_POST['Email'];

    $sql = "INSERT INTO user (user_name, user_password, user_namalengkap, user_email) 
            VALUES ('$user', '$pass', '$nama', '$email');";

    $hasil = mysqli_query($config, $sql);

    if($hasil){
        echo " Data berhasil ditambahkan";
    }else {
        echo " Data gagal disimpan";
    }
?>

<br>Kembali ke <a href="halamanuser.php">halaman user</a>