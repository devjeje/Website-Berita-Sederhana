<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Welcome</title>
</head>

<body>
    <?php
    session_start();
    include 'config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($config, $username);
        $password = mysqli_real_escape_string($config, $password);

        $sql = "SELECT * FROM user WHERE user_name='$username' AND user_password='$password'";
        $result = mysqli_query($config, $sql);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
        } else {
            echo "<p align='center'>Username atau Password salah</p>";
        }
    }

    if (isset($_SESSION['username'])) { ?>
        <h2 align="center">Control Panel</h2>
        <p align="center">Selamat Datang
            "<?php echo $_SESSION['username']; ?>".<br>
            Klik <a href="logout.php">disini</a> untuk logout.
        </p>
    <?php
        echo "<p align='center'>Berikut ini adalah menu navigasi anda</p>";
        echo "<p align='center'><a href='halamanberita.php'>Halaman Berita</a> | <a href='halamanuser.php'>Halaman User</a></p>";
    } else { ?>
        <h2>Maaf...</h2>
        <p>Anda tidak berhak mengakses halaman ini. Silahkan <a href="index.php">Login</a> terlebih dahulu. </p>
    <?php } ?>
</body>

</html>