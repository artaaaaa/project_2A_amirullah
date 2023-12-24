<?php
include "connect.php";
$foto = (isset($_POST['foto'])) ? htmlentities($_POST['foto']) : "";
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$kelas = (isset($_POST['kelas'])) ? htmlentities($_POST['kelas']) : "";
$lokasi = (isset($_POST['lokasi'])) ? htmlentities($_POST['lokasi']) : "";
$jamberangkat = (isset($_POST['jamberangkat'])) ? (htmlentities($_POST['jamberangkat'])) : "";

if(!empty($_POST['input_tiket_validate'])){
    $query = mysqli_query($conn, "INSERT INTO tb_tiket (foto,nama,kelas,lokasi,
    jamterbang)values ('$foto','$nama','$kelas','$lokasi','$jamberangkat')");
    if ($query) {
        $message = '<script>alert("Data Tiket berhasil dimasukkan")
    window.location="../tiket"</script>
    </script>';
    } else {
        $message = '<script>alert("Data Tiket gagal dimasukkan")
    window.location="../tiket"</script>';
    }
}echo $message
?>