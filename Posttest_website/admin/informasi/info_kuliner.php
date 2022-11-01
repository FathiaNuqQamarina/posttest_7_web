<?php 
    require '../konek_konten.php';

    date_default_timezone_set("Asia/Makassar");
    
    $query = "SELECT * FROM data_kuliner";
    $hasil = $db->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olahan Kuliner</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kristi&family=Oswald:wght@300&family=Poppins:wght@200&family=Roboto+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../stylesheet/style.css">
    <link rel="stylesheet" href="../../stylesheet/data_info.css">
    <link rel="stylesheet" href="../../stylesheet/darkmode.css">
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
    <form action="" method="GET" id="cari_data">
        <table>
            <tr>
                <td>
                <div class="form-outline">
                    <input type="text" name="keyword" id="keyword" class="form-control" placeholder = "Cari Informasi...">
                </div>
                </td>
                <td>
                <input type="submit" name="cari" value="cari">
                </td>
            </tr>
        </table>
    </form>
    <h1>Olahan Kuliner</h1>
    <table class="daftar_info">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Resep</th>
        </tr>
        <?php 
            $i = 1;
            while($row=mysqli_fetch_array($hasil)){
        ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$row['judul'] ?></td>
                <td><img src="../gambar_data/<?=$row['nama']?>" alt="" width="200px"></td>
                <td><?=$row['deskripsi']?></td>
                <td><a href="<?=$row['resep']?>"></a>Lihat Resep</td>
            </tr>
        <?php 
            $i++;
            }
        ?>
    </table>
    <a id = "link-kembali" href="../../index.html"> << Kembali</a>
    <div class="footer" >
        <h2 id="contact">Contact Us</h2>
        <div class = "fotlist">
            <img src="../../gambar/whatsapp.png" height="30px" width="30px" alt="Phone">
            <img src="../../gambar/twitter.png" height="30px" width="30px" alt="twitter">
            <img src="../../gambar/instagram.png" height="30px" width="30px" alt="Instagram">
            
        </div>
    </div>
    <script src="js/jvscript.js"></script>
</body>
</html>

<?php
if(isset($_GET['cari'])){
        $keyword =$_GET['keyword']; 
        $hasil = mysqli_query($db, "SELECT * FROM data_kuliner WHERE judul LIKE '%keyword%' OR deskripsi LIKE '%keyword%' ");
    } else{
        $hasil = mysqli_query($db, "SELECT * FROM data_kuliner");
    }
    
    $kuliner=[];
    while($row =mysqli_fetch_assoc($hasil)){
        $kuliner[]=$row;
    }
?>
