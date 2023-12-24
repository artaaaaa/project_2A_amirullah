<?php 
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";

if(!empty($_POST['delete_tiket_validate'])){
    $query = mysqli_query($conn, "DELETE FROM tb_tiket WHERE id='$id'");
    if($query){
        $message = '<script>alert("Data berhasil dihapus");
                    window.location="../tiket"</script>';
    }else{
        $message = '<script>alert("Data gagal dihapus");
                    window.location="../tiket"</script>';

    }
}echo $message;
?>