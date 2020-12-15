<?php
require_once("koneksi.php");
session_start();

if ($con->connect_error) {
    die("Koneksi error " . $con->connect_error);
}

if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    $sql = "SELECT username from user where username = '$user' and password = '$pass'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $user;

        header("location: welcome.php");
    } else {
        $error = "Username atau Password tidak cocok";
    }
}
