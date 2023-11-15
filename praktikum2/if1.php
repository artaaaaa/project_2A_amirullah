<!DOCTYPE html>
<html lang="en">
<head>
    <title>fadli_maulana</title>
</head>
<body>
    <?php 
    date_default_timezone_set('Asia/Jakarta');
    $d = date("D");
    $date = date("d-M-Y H:i:s");
    if ($d == "sat") {
        $d = "Sabtu";
        echo "Selamat belajar <br>";
    } else
        echo "Ini hari $d <br>";
        echo $d . " " . $date;
        ?>
</body>
</html>