<?php 
    require 'konek_db.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $hasil = mysqli_query($db, "SELECT * FROM info_req WHERE id = '$id' ");
        $row = mysqli_fetch_array($hasil);
    }

    if(isset($_POST['Kirim'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $kategori = implode(" ",$_POST['kt']);
        $jenis_rempah = $_POST['Rempah'];
        $detail = $_POST['info'];
        $waktu = $_POST['waktu_req'];

        $update = mysqli_query($db, "UPDATE info_req SET nama='$nama', email='$email', kategori='$kategori',jenis_rempah='$jenis_rempah',detail='$detail',waktu='$waktu' WHERE id='$id'");

        if($update){
            header("Location:daftar_info.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rempahan Rempah</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylesheet/darkmode.css">
    <link rel="stylesheet" href="stylesheet/edit.css">
</head>
<body>
    <div class="main">
        <h1>Edit Data Request Informasi</h1>
        <form method="post" action=" " id="inputan">
                <label for="nama">Nama :</label> <br>
                <input size = "30" name = "nama" id="nama" type="text" placeholder="Masukkan Nama Anda"><br><br>
                <label for="isi-email">Email :</label> <br>
                <input name = "email" size = "30" id="isi-email" type="email" placeholder="Masukkan Email Anda">
                <p>Silahkan Pilih Kategori Informasi :</p>
                <div>
                    <input id="kesehatan-form" type="checkbox" name="kt[]" value="Kesehatan">
                    <label for="kesehatan-form">KESEHATAN</label>
                </div>
                
                <div>
                    <input id="kuliner-form" type="checkbox" name="kt[]" value="Kuliner">
                    <label for="kuliner-form">KULINER</label>
                </div>
                
                <div>
                    <input id="kecantikan-form" type="checkbox" name="kt[]" value="Kecantikan">
                    <label for="kecantikan-form">KECANTIKAN</label>
                </div>
                <br>
                <label for="Rempah">Jenis Rempahan :</label> <br>
                <input size = "30" name = "Rempah" id="Rempah" type="text" placeholder="Masukkan Jenis Rempah"><br><br>
                <label for="info">Detail Informasi (Wajib Diisi) :</label> <br>
                <textarea name="info" id="info" row="8" cols="40" placeholder="Masukkan Detail Informasi"></textarea> <br><br>
                <label for="waktu_req">Waktu Request :</label> <br>
                <input id="waktu_req" name="waktu_req" type="datetime-local"><br>
                <br>
                <input style = "background-color: #897249;
                border-radius: 40%;
                text-decoration: none;
                color: white;
                width: 200px;
                height: 60px;
                padding: 20px 20px;
                margin: 20px 20px;
                font-size: 20px;
                cursor: pointer;" type="submit" value="Kirim" name = "Kirim">
            </form>
    </div>
    <a href="daftar_info.php"> << Kembali</a>

</body>
</html>