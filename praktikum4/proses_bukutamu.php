<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Data Buku Tamu</h1>
    <?php
    $nama=$_POST["nama"];
    $email=$_POST["email"];
    $komentar=$_POST["komentar"];
    ?>
    
    <hr>
    Nama anda : <?php echo $nama?>
    <br>
    Email address : <?php echo $email?>
    <br>
    Komentar : <textarea name="komentar" cols="40" rows="5"><?php echo $komentar?></textarea>
    <br>
</body>
</html>