<?php
include "connect.php";
$id = (isset($_POST['id_maskapai'])) ? htmlentities($_POST['id_maskapai']) : "";
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$namapilot = (isset($_POST['namapilot'])) ? htmlentities($_POST['namapilot']) : "";
$lokasi = (isset($_POST['lokasi'])) ? (htmlentities($_POST['lokasi'])) : "";

if (!empty($_POST['edit_tiket_validate'])) {
    $select = mysqli_query($conn, "SELECT * FROM tb_maskapai WHERE nama = '$nama'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Nama maskapai yang dimasukkan sudah ada")
        window.location="../maskapai"</script>';
    } else {
        $query = mysqli_query($conn, "UPDATE tb_maskapai SET nama='$nama', namapilot='$namapilot', lokasi='$lokasi' WHERE id_maskapai='$id'");
        if ($query) {
            $message = '<script>alert("Data Maskapai berhasil diupdate")
        window.location="../maskapai"</script>';
        } else {
            $message = '<script>alert("Data Maskapai gagal diupdate")
        window.location="../maskapai"</script>';
        }
    }
}
echo $message;
?>
