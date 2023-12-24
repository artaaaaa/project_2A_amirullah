<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$foto = (isset($_POST['foto'])) ? htmlentities($_POST['foto']) : "";
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$kelas = (isset($_POST['kelas'])) ? htmlentities($_POST['kelas']) : "";
$lokasi = (isset($_POST['lokasi'])) ? (htmlentities($_POST['lokasi'])) : "";
$jamberangkat = (isset($_POST['jamberangkat'])) ? (htmlentities($_POST['jamberangkat'])) : "";

if (!empty($_POST['edit_tiket_validate'])) {
    $query = mysqli_query($conn, "UPDATE tb_tiket SET foto='$foto', nama='$nama', kelas='$kelas', lokasi='$lokasi', jamterbang='$jamberangkat' WHERE id='$id'");
    if ($query) {
        $message = '<script>alert("Data Tiket berhasil diupdate")
        window.location="../tiket"</script>';
    } else {
        $message = '<script>alert("Data Tiket gagal diupdate")
        window.location="../tiket"</script>';
    }
}

echo $message;
?>
