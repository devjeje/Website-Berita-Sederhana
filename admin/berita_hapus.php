<?php
include "Config.php";
$id_beritanya = $_GET['berita_id'];

$sql = "DELETE FROM berita WHERE berita_id = '$id_beritanya'";
$hasil = mysqli_query($config, $sql);
//dibuat if else agar notifikasi bisa masuk sebelum menuju halamanuser.php
if ($hasil) {
    echo "<script>
        alert('Data Berhasil Dihapus');
        window.location.href = 'halamanberita.php';
    </script>";
} else {
    echo "<script>
        alert('Data Gagal Dihapus');
        window.location.href = 'halamanberita.php';
    </script>";
}