<?php 
 
session_start();
 
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Beli</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Terimakasih telah membeli melewati situs kami, <h1>"; ?>
            <?php echo "<h3>Untuk pembayaran lebih lanjut silahkan cek email anda </h3>"; ?>
            
            <div class="input-group">
            <a href="index.html" class="btn">Halaman Awal</a> 
            </div>
            <div class="input-group">
            <a href="jual_beli.html" class="btn">Beli lagi</a>
            </div>
        </form>
    </div>
</body>
</html>