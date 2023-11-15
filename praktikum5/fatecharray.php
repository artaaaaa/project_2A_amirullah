<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_saya")
    or die("Gagal koneksi ke database: " . mysqli_connect_error());

    $hasil = mysqli_query($conn, "SELECT * FROM liga");

    while ($row = mysqli_fetch_array($hasil)){
        echo "Liga " . $row["negara"]; // array asosiatif
        echo " dengan kode " . $row["kode"];
        echo " memiliki " . $row[2]; // array numeris
        echo " wakil di Liga Champions <br>";
    }
    ?>
</body>
</html>
