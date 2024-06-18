<?php
session_start();
include "Config.php";

$berita_id = $_POST["berita_id"];
$judul = mysqli_real_escape_string($config, $_POST["judul"]);
$isiberita = mysqli_real_escape_string($config, $_POST["isi"]);
$tgl_upload = mysqli_real_escape_string($config, $_POST["tanggal"]);
$usernama = mysqli_real_escape_string($config, $_POST["user_nama"]);

$lokasifile = $_FILES['gambar']['tmp_name'];
$namafile = $_FILES['gambar']['name'];
$uploaddir = "uploads/";
$uploadfile = $uploaddir . $namafile;

// Periksa apakah ada file yang diunggah
if (!empty($lokasifile) && !empty($namafile)) {
    // Jika ada file yang diunggah
    $sql = "UPDATE berita SET berita_judul='$judul', berita_isi='$isiberita', berita_tanggal='$tgl_upload', berita_gambar='$uploadfile', user_nama='$usernama' WHERE berita_id='$berita_id'";
    $hasil = mysqli_query($config, $sql);

    if ($hasil) {
        // Pindahkan file yang diunggah ke direktori uploads
        if (move_uploaded_file($lokasifile, $uploadfile)) {
            echo "<script>alert('Data berhasil diubah');</script>";
            echo "Nama File : <b>$namafile</b> sukses diupload <br/><br/>";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "Data gagal diubah: " . mysqli_error($config);
    }
} else {
    // Jika tidak ada file yang diunggah, update tanpa mengubah gambar
    $sql = "UPDATE berita SET berita_judul='$judul', berita_isi='$isiberita', user_nama='$usernama' WHERE berita_id='$berita_id'";
    $hasil = mysqli_query($config, $sql);

    if ($hasil) {
        echo "<script>alert('Data berhasil diubah');</script>";
    } else {
        echo "Data gagal diubah: " . mysqli_error($config);
    }
}

// Redirect ke halaman berita setelah selesai
header('location:halamanberita.php');
mysqli_close($config);
?>
