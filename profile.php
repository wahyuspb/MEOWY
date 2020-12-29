<?php
  include('session.php');
  require_once("koneksi.php");
?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="CSS/profile.css">
  <title>Profile</title>
</head>
<body>
  <div id="View">
    <div id="Content">
      <div id="UserImg"></div>
        <h3 id="Title"><strong><?php echo $session_username; ?></strong></h3>
      <div class="HR"></div>

      <menu>
        <ul>
          <li>
            <div id="Content">
              <h4>Nama Depan</h4>
              <span><?php echo $session_firstname; ?></span>
            </div>
          </li>

          <li>
            <div id="Content">
              <h4>Nama Belakang</h4>
              <span><?php echo $session_lastname; ?></span>
            </div>
          </li>

          <li>
            <div id="Content">
              <h4>Username</h4>
              <span><?php echo $session_username; ?></span>
            </div>
          </li>

          <li>
            <div id="Content">
              <h4>Password</h4>
              <span><?php echo $session_password; ?></span>
            </div>
        </ul>
        <a href="welcome.php"><button>Halaman Utama</button></a>
      </menu>
    </div>
  </div>
</body>
</html>
