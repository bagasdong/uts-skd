<?php
session_start();
unset($_SESSION['namauser']);
unset($_SESSION['role']);
header('Refresh: 3; URL = index.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Redirect</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </head>

    <body class="bg-light">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Anda berhasil Logout!</strong> Anda sedang dialihkan ke halaman utama dalam <span
                            id="counter"></span>.
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
    const element = document.getElementById('counter');
    let counter = 3;
    element.innerHTML = counter;
    setInterval(() => {
        counter--;
        element.innerHTML = counter;
    }, 1000)
    </script>

</html>