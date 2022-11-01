<?php 

    require 'konek_konten.php';

    if(isset($_POST['submit'])){
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $resep = $_POST['resep'];
        $nama =$_POST['nama'];

        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, 'gambar_data/'.$gambar_baru)){
            $query = "INSERT INTO data_kesehatan (judul, deskripsi, resep, nama) VALUES ('$judul','$deskripsi','$resep','$gambar_baru')";
            $hasil = $db->query($query);

            if($hasil){
                header("Location:informasi/info_kesehatan.php");
            }else{
                echo "gagal kirim";
            }
        }
        
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kesehatan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kristi&family=Oswald:wght@300&family=Poppins:wght@200&family=Roboto+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheet/style.css">
    <link rel="stylesheet" href="../stylesheet/data_info.css">
    <link rel="stylesheet" href="../stylesheet/darkmode.css">
    <link rel="stylesheet" href="../stylesheet/edit.css">
    
</head>
<body>
    <h1>Upload Informasi</h1>
    <form id ="inputan" action="" method="post" enctype="multipart/form-data">    

        <label for="">Author : </label><br>
        <input type="text" name="nama" placeholder="Masukkan Nama Author"><br><br>

        <label for="">Judul : </label><br>
        <input type="text" name="judul" placeholder="Masukkan Judul Informasi"><br><br>
        
        <label for="">Deskripsi :</label> <br>
        <textarea name="deskripsi" id="info" row="10" cols="40" placeholder="Masukkan Deskripsi Informasi"></textarea> <br><br>

        <label for="">Resep :</label> <br>
        <textarea name="resep" id="info" row="10" cols="40" placeholder="Masukkan Resep Informasi"></textarea> <br><br>
        
        <label for="">Rempah : </label><br>
        <input type="file" name="gambar"><br><br>

        <input type="submit" name="submit">
        <p>Tanggal Upload : <?=date("d-m-Y")?></p><br><br>
    </form>
    <a id = "lihat-data" href="informasi/info_kesehatan.php">Lihat Data</a>
    <a id = "link-kembali" href="admin/data_admin.html"> << Kembali</a>
    <div class="footer" >
        <h2 id="contact">Contact Us</h2>
        <div class = "fotlist">
            <img src="../gambar/whatsapp.png" height="30px" width="30px" alt="Phone">
            <img src="../gambar/twitter.png" height="30px" width="30px" alt="twitter">
            <img src="../gambar/instagram.png" height="30px" width="30px" alt="Instagram">
            
        </div>
    </div>
    <script src="js/jvscript.js"></script>
</body>
</html>
