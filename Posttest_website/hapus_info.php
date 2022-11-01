<?php 

require 'konek_db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM info_req WHERE id='$id'");

    if($hapus){
        header("Location:daftar_info.php");
    }
}