<!DOCTYPE html>
<html lang="en">
<head>
    <title>fadli_maulana</title>
</head>
<body>
    <?php
    function psgpjg($pjg, $lbr) {
        $luas = $pjg * $lbr;
        return $luas;
    }
    $bil1 = 8;
    $bil2 = 4;
    echo "Luas persegi panjang dengan panjang 8 dan lebar 4 = " ;
    echo  psgpjg($bil1, $bil2);
    ?>
</body>
</html>
