<?php
include "Config.php";

$user = $_POST['username'];
$pass = $_POST['password'];
$name = $_POST['namalengkap'];
$email = $_POST['email'];

$sql = "UPDATE user 
        SET user_password = '$pass', 
        user_namalengkap = '$name', 
        user_email = '$email' 
        WHERE user_name = '$user'";

$hasil = mysqli_query($config, $sql);

if ($hasil) {
    echo "Data berhasil diubah";
} else {
    echo "Data gagal diubah";
}
?>

<br>kembali ke <a href="halamanuser.php"> halaman user</a>