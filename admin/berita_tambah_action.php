<?php
include "Config.php"; // Memasukkan file koneksi ke database

// Mengambil data dari form
$judul = mysqli_real_escape_string($config, $_POST["judul"]);
$isiberita = mysqli_real_escape_string($config, $_POST["isi"]);
$tgl_upload = mysqli_real_escape_string($config, $_POST["tanggal"]);
$usernama = mysqli_real_escape_string($config, $_POST["user_nama"]);

// Nama file temporary yang akan disimpan di server
$lokasifile = $_FILES['gambar']['tmp_name'];
// Membaca nama file yang akan diupload
$namafile = $_FILES['gambar']['name'];
$namafile = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', $namafile);
// Folder penyimpanan berkas/file
$uploaddir = "uploads/"; // Pastikan path ini sudah benar dan folder tersedia
// Menggabungkan nama folder dan nama file
$uploadfile = $uploaddir . $namafile;

// Jika file berhasil diupload
if(move_uploaded_file($lokasifile, $uploadfile)){
    echo "Nama File : <b>$namafile</b> sukses diupload";

    // Memasukkan informasi file ke dalam database
    $sql = "INSERT INTO berita (berita_judul, berita_isi, berita_gambar, berita_tanggal, user_nama) 
            VALUES ('$judul', '$isiberita', '$uploadfile', '$tgl_upload', '$usernama')";
    
    if(mysqli_query($config, $sql)){
        echo "Data berhasil ditambahkan";
        header('Location: halamanberita.php'); // Redirect ke halaman berita setelah berhasil
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($config); // Tampilkan pesan error SQL jika terjadi kesalahan
    }
} else {
    echo "File gagal diupload atau disimpan";
}

// Tutup koneksi
mysqli_close($config);
?>
