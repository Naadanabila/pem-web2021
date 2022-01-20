<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 

    $username = $_POST['username'];
    $email = $_POST['email'];
    $isi = $_POST['isi'];

$sql = "INSERT INTO komentar (username, email, isi)
VALUES ('$username', '$email', '$isi')";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Welcome to Our Art</title>
    <link rel="stylesheet" href="style_ks.css">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="berhasil_login.php">
</head>
<body>

    <div class="nav-container" >

            <nav>
                <div class="icon-register">
                    <a href="index.php">
                        Login 
                    </a>
                    
                </div>

                <div class="wrapper">
                <ul class="nav-items">
                    <li>
                        <a href="beranda.html">Beranda</a>
                    </li>

                    <li>
                        <a href="jual_beli.html">Shopping</a>
                    </li>

                    <li>
                        <a href="pameran.html">Pameran</a>
                    </li>

                    <li>
                        <a href="komentar.php">Kritik/Saran</a>
                    </li>
                </ul>
                </div>
                <div class="logo">
                    <a href="index.html">
                    Our Art
                    </a>
                </div>
            </nav>
    </div>

<hr>
    <div class="judul" style="margin-left: 100px; margin-top: 40px; color: white; font-size: 30px; font-family: inter;">
        <h3>Kritik, Saran ataupun Komentar</h3>
    </div><br>
     <div class="komentar" style="color: white; padding-top: 50pxpx; padding-bottom: 150px; margin-left: 100px; " >
     <form action="komentar.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 20px; font-weight: 800;"></p>
            <div class="input-group">
                Username:  <br><input type="nama" name="username" value="<?php echo $username; ?>" required> 
            </div>
            <div class="input-group">
                Email: <br><input type="email" placeholder="email" name="email" value="<?php echo $email; ?>" required> 
            </div>
            <div class="input-group" style="margin-bottom: 45px; box-sizing: 400px;">
                Isi: <br><textarea name="isi" rows="5" cols="40" placeholder="ketik pesan anda..." value="<?php echo $isi; ?>" required></textarea>
            </div>
            <div class="input-group" style="text-decoration: none; margin-bottom: 120px;">
                <button name="beli" class="btn">Kirim</button>
            </div>
    </form>
     </div>
     
    <hr>
    <footer style="text-align: center; font-size: 12px; color: white;">
        <p>Web for Artist &ac; 2020 OurArtWeb. All rights reserved.</p>
    </footer>

</body>
</html>