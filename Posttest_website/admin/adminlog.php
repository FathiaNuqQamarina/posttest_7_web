<?php
    session_start();

    require 'konek_login.php';

    if(isset($_POST['Login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hasil = mysqli_query($conn, "SELECT username, password FROM log_admin WHERE username = '$username'");

        if(mysqli_num_rows($hasil)== 1){
          $row = mysqli_fetch_assoc($hasil);
          if(password_verify($password, $row['password'])){
            $_SESSION['Login'] = $row;

            header("Location: ../data_admin.html");
          }else{
            $error_pass = true;

          }
        }else{
            $error_username= true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../stylesheet/style.css">
    <link rel="stylesheet" href="../stylesheet/darkmode.css">
    <link rel="stylesheet" href="../stylesheet/data_info.css">
    <link rel="stylesheet" href="../stylesheet/menu_admin.css">

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
    <h1 style="text-align:center;margin-top: 10%;">Login Sebagai Admin</h1>
    <form method="post" action="admin/data_admin.html" >
    <table id="form-admin">
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" class="inputan" placeholder="Username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" class="inputan" placeholder="Password" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="Login" class="inputan" placeholder="Password" required></td>
            </tr>
        </table>
    </form>
    <?php if (isset($error_pass)) {echo "<p>Password anda Salah</p>";} ?>
    <?php if (isset($error_username)) {echo "<p>Akun Tidak ditemukan</p>";} ?>
</body>
</html>