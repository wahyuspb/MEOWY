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
   $select_u = "Select id_diagnosa from diagnosa";
   $query1 = mysqli_query($con, $select_u);
   $count = mysqli_num_rows($query1);
   $date = date('Y/m/d');
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
   } elseif ($G[1] and $G[2] and $G[7]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P003', '$date')";
      mysqli_query($con, $insert);
   } elseif ($G[1] and $G[2] and $G[8] and $G[9] and $G[10] and $G[11] and $G[12]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P004', '$date')";
      mysqli_query($con, $insert);
   } elseif ($G[1] and $G[2] and $G[13] and $G[14]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P005', '$date')";
      mysqli_query($con, $insert);
   } elseif ($G[1] and $G[2] and $G[15] and $G[16] and $G[17] and $G[18]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P002', '$date')";
      mysqli_query($con, $insert);
   } elseif ($G[1] and $G[2] and $G[19] and $G[20] and $G[21]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P006', '$date')";
      mysqli_query($con, $insert);
   } elseif ($G[1] and $G[2] and $G[31] and $G[32]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P011', '$date')";
      mysqli_query($con, $insert);
   } elseif ($G[1] and $G[2] and $G[33] and $G[34] and $G[35] and $G[36] and $G[37]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P012', '$date')";
      mysqli_query($con, $insert);
   } elseif ($G[1] and $G[2] and $G[39] and $G[40]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P014', '$date')";
      mysqli_query($con, $insert);
   } elseif ($G[29] and $G[2] and $G[26] and $G[27] and $G[28]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P009', '$date')";
      mysqli_query($con, $insert);
   } elseif ($G[2] and $G[29] and $G[30]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P010', '$date')";
      mysqli_query($con, $insert);
   } elseif ($G[2] and $G[38]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P013', '$date')";
      mysqli_query($con, $insert);
   } elseif ($G[22] and $G[23] and $G[24]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P007', '$date')";
      mysqli_query($con, $insert);
   } elseif ($G[22] and $G[23]) {
      $insert = "INSERT INTO diagnosa VALUES ('$id', '$user_check', 'P008', '$date')";
      mysqli_query($con, $insert);
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
               <h2><?php echo $session_firstname . $session_lastname; ?></h2>
               <div class="button">
                  <button class="diagnosa">Diagnosa</button><br>
                  <button class="riwayat">Riwayat</button><br>
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
      <?php if(isset($_POST["selesai"])){ ?>
      <table>
         <tr>
            <th>Hasil Diagnosa</th>
            <th>Nama Pengguna</th>
            <th>Waktu Diagnosa</th>
         </tr>
      </table>
     <?php } ?>
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