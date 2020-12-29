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
    $id;

    $fname = !empty($fname) ? "'$fname'" : "NULL";
    $lname = !empty($lname) ? "'$lname'" : "NULL";
    $uname = !empty($uname) ? "'$uname'" : "NULL";
    $pass = !empty($pass) ? "'$pass'" : "NULL";

    $select = "Select id_user from user";
    $query = mysqli_query($con, $select);
    $count = mysqli_num_rows($query);
    $row = [];
    while ($ambil = mysqli_fetch_assoc($query)){
        $row[] = $ambil;
    }
    
    
    if($count == 0){
        $id = "USER-001";
    }else{
        $idtemp = end($row);
        $idtemp = explode("-", $idtemp["id_user"]);
        $int = (int)$idtemp[1]+1;
        $prefix = sprintf("%'03d", $int);
        $idtemp[1] = $prefix;
        $idtemp = implode("-", $idtemp);
        $id = $idtemp; 
    }   

    $sql = "INSERT INTO user VALUES ('$id',$fname,$lname,$uname,$pass)";

        if (mysqli_query($con, $sql) === true) {
            echo "
            <script>
                alert('Register Sukses');
                window.location = 'login.php';
            </script>";

        }else{
            echo $con->error;
        }
        $con->close();
}
    ?>