<?php 
    require 'konek_db.php';

    $hasil = mysqli_query($db, "SELECT * FROM info_req");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rempahan Rempah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kristi&family=Oswald:wght@300&family=Poppins:wght@200&family=Roboto+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/daftarinfo.css">
    <link rel="stylesheet" href="stylesheet/darkmode.css">
</head>
<body>
    
    <nav class="navbar" id="web">
        <h1 id="home">RempahanRempah</h1>
        <div class="nav-menu">
            <div class="swicth-mode"> 
                <input type="checkbox" id = "mode" onclick="ubahWarna()">
            </div>
        </div>
    </nav>
    <div id="list_info">
    <div class="daftar_info">
            <h1 style="text-align: center;margin-right: 80px;">Daftar Request Informasi</h1>
            <table>
                <tr class="judul">
                    <th>No</th>
                    <th nowrap>Nama</th>
                    <th>Email</th>
                    <th>Kategori</th>
                    <th>Jenis Rempah</th>
                    <th>Datail</th>
                    <th>Waktu Request</th>
                    <th colspan="2">Aksi</th>
                </tr>

                <?php 
                    $i = 1;
                    while($row = mysqli_fetch_array($hasil)){

                ?>

                <tr>
                    <td><?=$i;?></td>
                    <td nowrap><?=$row['nama']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['kategori']?></td>
                    <td><?=$row['jenis_rempah']?></td>
                    <td><?=$row['detail']?></td>
                    <td><?=$row['waktu']?></td>
                    <td class="edit">
                        <a href="edit_info.php?id=<?=$row['id'];?>">
                            <p style="color:green;">Edit</p>
                        </a>
                    </td>
                    <td class="hapus">
                        <a href="hapus_info.php?id=<?=$row['id'];?>">
                            <p style="color:red;">Hapus</p>
                        </a>
                    </td>
                </tr>
                
                <?php
                    $i++; 
                        }
                ?>

            </table>
    </div>
    <a href="index.html"> << Kembali</a>
    </div>
    <div class="footer" >
        <h2 id="contact">Contact Us</h2>
        <div class = "fotlist">
            <img src="gambar/whatsapp.png" height="30px" width="30px" alt="Phone">
            <img src="gambar/twitter.png" height="30px" width="30px" alt="twitter">
            <img src="gambar/instagram.png" height="30px" width="30px" alt="Instagram">
            
        </div>
    </div>
    <script src="js/jvscript.js"></script>
</body>
</html>