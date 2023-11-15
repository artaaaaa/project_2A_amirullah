<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""></form>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_saya")
    or die("Gagal koneksi ke database: " . mysqli_connect_error());
    $hasil = mysqli_query($conn,"SELECT * FORM login WHERE username");
    $row = mysqli_fetch_array($hasil2);
    $cari =$_POST['cari']
    ?>
</body>
</html>