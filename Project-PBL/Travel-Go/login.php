<?php
    // session_start();
    if(!empty($_SESSION['username_travelgo'])){
        header('location:home');
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trave-Go - Aplikasi Pemesanan tiket pesawat online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <!-- Header -->
    <!-- <?php include "header2.php"; ?> -->
    <!-- End header -->
    <div class="center">
        <h1>Login</h1>
        <form class="needs-validation" novalidate action="proses/proses_login.php" method="POST">
            <div class="txt_field">
                <input name="username" type="email" required>
                <span></span>
                <label>Username</label>
                <div class="invalid-feedback">
                    Masukkan email yang valid
                </div>
            </div>
            <div class="txt_field">
                <input name="password" type="password" required>
                <span></span>
                <label>Password</label>
                <div class="invalid-feedback">
                    Masukkan password
                </div>
            </div>
            <div class="pass">Forgot Password?</div>
            <button class="btn btn-primary w-100 py-2" type="submit" name="submit_validate" value="abc">Login</button>
            <div class="signup_link">
                Not a member? <a href="#">Signup</a>
            </div>
        </form>
    </div>
    <div class="fixed-bottom text-center mb-2">Copyright 2023 artha</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>