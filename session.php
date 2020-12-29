<?php
   include('koneksi.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $sql = mysqli_query($con, "SELECT first_name, last_name, username, password from user where id_user = '$user_check'");
   
   $row = mysqli_fetch_assoc($sql);   
   $session_firstname = $row['first_name'];
   $session_lastname = $row['last_name'];
   $session_username = $row['username'];
   $session_password = $row['password'];

   
 
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>