<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Request</title>
    <link href="https://fonts.googleapis.com/css2?family=Kristi&family=Oswald:wght@300&family=Poppins:wght@200&family=Roboto+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body style="text-align: center; border-top: 10px solid red;
     border : 10px solid #897249;
     border-radius :20px;
     margin :10%
     ">
<h1 style="text-align: center; margin-bottom: 10%;">Daftar Request Informasi</h1>
<div class = "hasil", style = "
    text-align: justify;
    padding-top :30px;
    padding-left :39%;
     margin-right: 20%;
     margin-top: 20px;
     margin-bottom: 20%;
     font-size: 30px;
     ">
    <?php
        if(isset($_POST['Kirim'])){
            echo "Nama :  ".$_POST['nama'];
            echo "<br/>";
            echo "Email :  ".$_POST['email'];
            echo "<br/>";

            if(!empty($_POST['kt'])) {

                foreach($_POST['kt'] as $value){
                    echo "Kategori :  ".$value.'<br/>';
                }
            }
            echo " Jenis Rempahan :".$_POST['Rempah'];
            echo "<br/>";
            echo "Detail :".$_POST['info'];
            echo "<br/>";
            echo "Waktu Kirim :  ".$_POST['waktu_req'];
            echo "<br/>";
            
        }
    ?>


</div>
<h1>Terima Kasih Telah Mengisi Form</h1>


</body>
</html>


