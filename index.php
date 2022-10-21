<?php
session_start();
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

                        <?php
                    if (isset($_SESSION['namauser'])) {
                        echo "Selamat datang <strong>{$_SESSION['fullname']}</strong>. Klik <a href=\"logoutController.php\"><strong>Logout</strong></a> untuk logout.";
                    } else {
                        echo "Anda belum login, klik <a href=\"loginPage.php\">Login</a> untuk login";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>