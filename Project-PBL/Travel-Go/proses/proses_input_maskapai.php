<?php
include "connect.php";
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$namapilot = (isset($_POST['namapilot'])) ? htmlentities($_POST['namapilot']) : "";
$lokasi = (isset($_POST['lokasi'])) ? (htmlentities($_POST['lokasi'])) : "";


if(!empty($_POST['input_maskapai_validate'])){
    $query = mysqli_query($conn, "INSERT INTO tb_maskapai (nama,namapilot,lokasi
    )values ('$nama','$namapilot','$lokasi')");
    if ($query) {
        $message = '<script>alert("Data Maskapai berhasil dimasukkan")
    window.location="../maskapai"</script>
    </script>';
    } else {
        $message = '<script>alert("Data Maskapai gagal dimasukkan")
    window.location="../maskapai"</script>';
    }
}echo $message
?>