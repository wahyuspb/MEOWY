<?php
   include('koneksi.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $sql = mysqli_query($con, "SELECT username from user where username = '$user_check'");
   
   $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>