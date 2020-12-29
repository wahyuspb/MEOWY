<?php
include('session.php');
require_once("koneksi.php");
?>

<html>

<head>
   <title>Welcome </title>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="CSS/userdiagnosa.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>
   <div class="main-container">
      <div class="kiri">
         <div class=list>
            <center>
               <h2>Halo</h2>
               <h2><?php echo $session_firstname . $session_lastname; ?></h2>
               <div class="button">
               <a href="welcome.php"><button class="diagnosa">Diagnosa</button></a><br>
                  <button class="riwayat">Riwayat</button></a><br>
                  <button class="penyakit">Penyakit</button><br>
                  <form action="act_logout.php">
                     <input type="submit" value="Keluar" class="keluar"></input>
                  </form>
               </div>
            </center>
         </div>
      </div>

      <div class="kanan">
        <?php 
        if(isset($_POST['selesai'])){
           $tampil = "SELECT user.username, penyakit.penyakit, penyakit.penanganan, diagnosa.date from diagnosa JOIN user ON diagnosa.id_user = user.id_user 
           join penyakit on diagnosa.id_penyakit = penyakit.id_penyakit WHERE diagnosa.id_user = '$user_check' 
           and diagnosa.id_diagnosa = '$id'";
           $q = mysqli_query($con, $tampil);
  
           while ($record = mysqli_fetch_array($q)) {
           ?>
        <table>
           <tr>
              <th>Hasil Diagnosa</th>
              <th>Nama Pengguna</th>
              <th>Penanganan</th>
              <th>Waktu Diagnosa</th>
           </tr>
           <tr>
              <td><?php echo $record['penyakit'];?></td>
              <td><?php echo $record['username'];?></td>
              <td><?php echo $record['penanganan'];?></td>
              <td><?php echo $record['date'];?></td>
           </tr>
        </table>
       <?php } }?>
        ?>

      </div>

</body>