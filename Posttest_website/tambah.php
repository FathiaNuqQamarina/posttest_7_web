<?php 

require 'konek_db.php';

if(isset($_POST['Kirim'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kategori = implode(" ",$_POST['kt']);
    $jenis_rempah = $_POST['Rempah'];
    $detail = $_POST['info'];
    $waktu = $_POST['waktu_req'];

    $kirim = mysqli_query($db, "INSERT INTO info_req (nama,email,kategori,jenis_rempah,detail,waktu) VALUES ('$nama','$email','$kategori','$jenis_rempah','$detail','$waktu')");

    if($kirim){
        echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:daftar_info.php");
    }else {
        echo "gagal mengirim";
    }
}