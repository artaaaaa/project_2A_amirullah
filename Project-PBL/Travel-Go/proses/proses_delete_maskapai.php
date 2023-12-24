<?php 
include "connect.php";
$id = (isset($_POST['id_maskapai'])) ? htmlentities($_POST['id_maskapai']) : "";

if(!empty($_POST['delete_maskapai_validate'])){
    $query = mysqli_query($conn, "DELETE FROM tb_maskapai WHERE id_maskapai='$id'");
    if($query){
        $message = '<script>alert("Data berhasil dihapus");
                    window.location="../maskapai"</script>';
    }else{
        $message = '<script>alert("Data gagal dihapus");
                    window.location="../maskapai"</script>';

    }
}echo $message;
?>