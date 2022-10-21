<?php
require('koneksi.php');
require('caesar.php');
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $username_encrypt = encrypt($username);
    $password = $_POST['password'];
    $password_md5 = md5($password . $username);
    $user = mysqli_query($koneksi, "SELECT * FROM students WHERE username='$username_encrypt'");
    while ($row = mysqli_fetch_array($user, MYSQLI_BOTH)) {
        $fullname = $row["fullname"];
    }
    if (mysqli_num_rows($user) >= 1) {
        foreach ($user as $data) {
            if ($data['password'] == $password_md5) {
                $_SESSION['namauser'] = $username_encrypt;
                $_SESSION['fullname'] = $fullname;
                header("Location: index.php");
                die();
            } else {
                header("Location: loginPage.php?error=yes");
                die();
            }
        }
    } else {
        header("Location: loginPage.php?error=yes");
        die();
    }
} else {
    if ($_SESSION['namauser']) {
        header("Location: list-barang.php");
        die();
    } else {
        header("Location: loginPage.php");
        die();
    }
}