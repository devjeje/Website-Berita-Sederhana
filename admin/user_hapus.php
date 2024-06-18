<?php
    include "Config.php";
    $user = $_GET['user_name'];

    $sql = "DELETE FROM user WHERE user_name = '$user'";
    $hasil = mysqli_query($config, $sql);

    //dibuat if else agar notifikasi bisa masuk sebelum menuju halamanuser.php
    if ($hasil) {
        echo "<script>
            alert('Data Berhasil Dihapus');
            window.location.href = 'halamanuser.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Dihapus');
            window.location.href = 'halamanuser.php';
        </script>";
    }
?>
