<?php
require_once("koneksi.php");

if ($con->connect_error) {
    die("Koneksi error " . $con->connect_error);
}


if (isset($_POST["register"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    $fname = !empty($fname) ? "'$fname'" : "NULL";
    $lname = !empty($lname) ? "'$lname'" : "NULL";
    $uname = !empty($uname) ? "'$uname'" : "NULL";
    $pass = !empty($pass) ? "'$pass'" : "NULL";
    $sql = "INSERT INTO `user`(`first_name`, `last_name`, `username`, `password`) VALUES ($fname,$lname,$uname,$pass)";

        if ($con->query($sql) === true) {
    ?>
            <script>
                alert("Register Sukses");
                window.location = 'login.php';
            </script>
    <?php
        }else{
            echo $con->error;
        }
        $con->close();
}
    ?>