<?php
include "connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) {
        echo '<script>alert("Konfirmasi password tidak sesuai.")
                    window.location="../register.php"</script>';
        exit();
    }

    $hashed_password = md5($password);

    $query = "INSERT INTO tb_user (nama, username, password, level) VALUES ('$nama', '$email', '$hashed_password', '3')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        $message = '<script>alert("Registrasi berhasil. Silakan login.")
                    window.location="../login.php"</script>';
    } else {
        $message = '<script>alert("Registrasi gagal. Silakan coba lagi.")
                    window.location="../register.php"</script>';
    }
    echo $message;
} else {
    echo "Metode tidak diizinkan.";
}
?>
