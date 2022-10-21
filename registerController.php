<?php
require('koneksi.php');
require('caesar.php');
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$username_encrypt = encrypt($username);
$password = $_POST['password'];
$password_md5 = md5($password . $username);
$isUsed = mysqli_query($koneksi, "SELECT * FROM `students` WHERE `username`='$username_encrypt'");
if (mysqli_num_rows($isUsed) < 1) {
    $data = mysqli_query($koneksi, "INSERT INTO `students` (`fullname`,`username`, `password`) VALUES ('$fullname', '$username_encrypt', '$password_md5')");
    if ($data) {
        header("Location: loginPage.php");
        die();
    } else {
        header("Location: registerPage.php?error=yes");
        die();
    }
} else {
    header("Location: registerPage.php?error=yes");
    die();
}