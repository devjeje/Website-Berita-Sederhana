<!DOCTYPE html>
<html lang="en">
<head>
    <title>BERITA AMIKOM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center" style="margin-bottom:0; background: url('images/Amikom.jpg') center center fixed no-repeat; background-size: cover;">
        <h1>BERITA AMIKOM</h1>
        <p>Berita Terkini</p>
    </div>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-8">
                <?php 
                    include "Config.php";
                    $sql = "SELECT * FROM berita ORDER BY berita_id";
                    $hasil = mysqli_query($config, $sql);
                    while ($data = mysqli_fetch_array($hasil)) {
                ?>
                    <h2><?php echo $data['berita_judul']; ?></h2>
                    <h6><?php echo $data['berita_tanggal']; ?></h6>
                    <h6><?php echo $data['user_nama']; ?></h6>
                    <div>
                        <img src="admin/<?php echo $data['berita_gambar']?>" width="720">
                    </div>
                    <p><?php echo $data['berita_isi']; ?></p>
                <?php
                    }
                ?>
            </div>
            <div class="col-sm-4">
                <h3>Topik Populer</h3>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Ramadan 2018</a>
                    <a href="#" class="list-group-item list-group-item-action">LIGA 1 2018</a>
                    <a href="#" class="list-group-item list-group-item-action">Waisak 2018</a>
                </div>
                <hr class="d-sm-none">
            </div>
        </div>
    </div>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Footer</p>
    </div>
</body>
</html>
