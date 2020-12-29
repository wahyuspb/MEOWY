<?php
include('session.php');
require_once("koneksi.php");

if ($con->connect_error) {
   die("Koneksi error " . $con->connect_error);
}

$select = "Select gejala from gejala";
$query = mysqli_query($con, $select);
$row = [];
while ($ambil = mysqli_fetch_assoc($query)) {
   $row[] = $ambil;
}

if (isset($_POST["selesai"])) {
   $G = $_POST["pertanyaan"]; 
   $id;
   $date = date('Y/m/d');
   $select_u = "Select id_diagnosa from diagnosa";
   $query1 = mysqli_query($con, $select_u);
   $count = mysqli_num_rows($query1);
   $row1 = [];
   while ($ambil1 = mysqli_fetch_assoc($query1)){
        $row1[] = $ambil1;
    }

   if($count == 0){
      $id = "DIAG-001";
  }else{
      $idtemp = end($row1);
      $idtemp = explode("-", $idtemp["id_diagnosa"]);
      $int = (int)$idtemp[1]+1;
      $prefix = sprintf("%'03d", $int);
      $idtemp[1] = $prefix;
      $idtemp = implode("-", $idtemp);
      $id = $idtemp; 
  }   


   if ($G[1] and $G[2] and $G[3] and $G[4] and $G[5] and $G[6]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P001', '$date')";
      mysqli_query($con, $insert);

      
      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G001')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G002')";
      mysqli_query($con, $insert3);
      $insert4 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G003')";
      mysqli_query($con, $insert4);
      $insert5 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G004')";
      mysqli_query($con, $insert5);
      $insert6 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G005')";
      mysqli_query($con, $insert6);
      $insert7 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G006')";
      mysqli_query($con, $insert7);
      

   } elseif ($G[1] and $G[2] and $G[7]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P003', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G001')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G002')";
      mysqli_query($con, $insert3);
      $insert4 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G007')";
      mysqli_query($con, $insert4);

   } elseif ($G[1] and $G[2] and $G[8] and $G[9] and $G[10] and $G[11] and $G[12]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P004', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G001')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G002')";
      mysqli_query($con, $insert3);
      $insert4 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G008')";
      mysqli_query($con, $insert4);
      $insert5 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G009')";
      mysqli_query($con, $insert5);
      $insert6 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G010')";
      mysqli_query($con, $insert6);
      $insert7 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G011')";
      mysqli_query($con, $insert7);
      $insert8 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G012')";
      mysqli_query($con, $insert8);

   } elseif ($G[1] and $G[2] and $G[13] and $G[14]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P005', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G001')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G002')";
      mysqli_query($con, $insert3);
      $insert4 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G013')";
      mysqli_query($con, $insert4);
      $insert5 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G014')";
      mysqli_query($con, $insert5);

   } elseif ($G[1] and $G[2] and $G[15] and $G[16] and $G[17] and $G[18]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P002', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G001')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G002')";
      mysqli_query($con, $insert3);
      $insert4 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G015')";
      mysqli_query($con, $insert4);
      $insert5 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G016')";
      mysqli_query($con, $insert5);
      $insert6 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G017')";
      mysqli_query($con, $insert6);
      $insert7 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G018')";
      mysqli_query($con, $insert7);

   } elseif ($G[1] and $G[2] and $G[19] and $G[20] and $G[21]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P006', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G001')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G002')";
      mysqli_query($con, $insert3);
      $insert4 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G019')";
      mysqli_query($con, $insert4);
      $insert5 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G020')";
      mysqli_query($con, $insert5);
      $insert6 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G021')";
      mysqli_query($con, $insert6);

   } elseif ($G[1] and $G[2] and $G[31] and $G[32]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P011', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G001')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G002')";
      mysqli_query($con, $insert3);
      $insert4 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G031')";
      mysqli_query($con, $insert4);
      $insert5 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G032')";
      mysqli_query($con, $insert5);

   } elseif ($G[1] and $G[2] and $G[33] and $G[34] and $G[35] and $G[36] and $G[37]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P012', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G001')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G002')";
      mysqli_query($con, $insert3);
      $insert4 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G033')";
      mysqli_query($con, $insert4);
      $insert5 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G034')";
      mysqli_query($con, $insert5);
      $insert6 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G035')";
      mysqli_query($con, $insert6);
      $insert7 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G036')";
      mysqli_query($con, $insert7);
      $insert8 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G037')";
      mysqli_query($con, $insert8);

   } elseif ($G[1] and $G[2] and $G[39] and $G[40]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P014', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G001')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G002')";
      mysqli_query($con, $insert3);
      $insert4 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G039')";
      mysqli_query($con, $insert4);
      $insert5 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G040')";
      mysqli_query($con, $insert5);

   } elseif ($G[29] and $G[2] and $G[26] and $G[27] and $G[28]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P009', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G029')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G002')";
      mysqli_query($con, $insert3);
      $insert4 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G026')";
      mysqli_query($con, $insert4);
      $insert5 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G027')";
      mysqli_query($con, $insert5);
      $insert6 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G028')";
      mysqli_query($con, $insert6);

   } elseif ($G[2] and $G[29] and $G[30]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P010', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G002')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G029')";
      mysqli_query($con, $insert3);
      $insert4 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G030')";
      mysqli_query($con, $insert4);

   } elseif ($G[2] and $G[38]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P013', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G002')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G038')";
      mysqli_query($con, $insert3);

   } elseif ($G[22] and $G[23] and $G[24]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P007', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G022')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G023')";
      mysqli_query($con, $insert3);
      $insert4 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G024')";
      mysqli_query($con, $insert4);

   } elseif ($G[22] and $G[23]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P008', '$date')";
      mysqli_query($con, $insert);

      $insert2 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G022')";
      mysqli_query($con, $insert2);
      $insert3 = "INSERT INTO `detail_diagnosa`(`id_diagnosa`, `id_gejala`) VALUES ('$id','G023')";
      mysqli_query($con, $insert3);
   }
}
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
               <a href="profile.php"><h2><?php echo $session_firstname . $session_lastname; ?></h2></a>
               <div class="button">
                  <button class="diagnosa">Diagnosa</button><br>
                  <a href="riwayat.php"><button class="riwayat">Riwayat</button></a><br>
                  <button class="penyakit">Penyakit</button><br>
                  <form action="act_logout.php">
                     <input type="submit" value="Keluar" class="keluar"></input>
                  </form>
               </div>
            </center>
         </div>
      </div>

      <div class="kanan">
      <center>
      <form action="" method="post" id="p">
         <?php $i = 1; ?>
         <div class="container">
            <?php foreach ($row as $r) : ?>
               <div id="pert" class="pertanyaan<?= $i ?>" hidden>
                  <h3 id="pertanyaan"><?= $i ?>. Apakah <?= $r["gejala"] ?> ? </h3>
                  <input type="radio" class="ya" id="ya<?= $i ?>" name="pertanyaan[<?= $i ?>]" value="1">
                  <label for="">ya</label>
                  <input type="radio" class="tidak" id="tidak<?= $i ?>" name="pertanyaan[<?= $i ?>]" value="0">
                  <label for="">tidak</label>
                  <input type="radio" name="pertanyaan[<?= $i ?>]" value="0" checked hidden>
               </div>
               <?php $i += 1 ?>
            <?php endforeach; ?>
         </div>
         <button type="submit" class="submit" name="selesai">SELESAI</button>
      </form>
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
      </center>
      </div>

</body>
<script>
   let show = (nomer) => {
      $('.pertanyaan' + nomer + '').removeAttr('hidden');
   }

   let hide = (nomer) => {
      $('.pertanyaan' + nomer + '').attr('hidden', '');
   }

   $(document).ready(function() {
      show(1);
      for (let x = 1; x <= 40; x++) {
         $('#ya' + x + '').click(() => {
            hide(x);
            show(x + 1);
         })
         $('#tidak' + x + '').click(() => {
            hide(x);
            show(x + 1);
         })
      }
   });





   // $( document ).ready(function() {
   //    show(1);
   // });

   //    $('#ya1').click(()=>{ 
   //    show(2);
   // })

   // $('#tidak2').click(()=>{
   //    i=1;
   //    while(i<=40){
   //       hide(i);
   //       i++;
   //    }
   //    show(22);
   // })

   //penyakit PANLEUKOPENIA
   // $('#ya1').click(()=>{ 
   //    show(2);
   // })

   // $('#tidak1').click(()=>{
   //    i=1;
   //    while(i<=40){
   //       hide(i);
   //       i++;
   //    }
   //    show(2);
   // })

   // $('#ya2').click(()=>{
   //    show(3);
   // })

   // $('#ya3').click(()=>{
   //    show(4);
   // })

   // $('#ya4').click(()=>{
   //    show(5);
   // })

   // $('#ya5').click(()=>{
   //    show(6);
   // })
</script>

</html>