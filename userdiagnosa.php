<?php
include('session.php');
require_once("koneksi.php");

$select = "Select gejala from gejala";
$query = mysqli_query($con, $select);
$row = [];
while ($ambil = mysqli_fetch_assoc($query)) {
    $row[] = $ambil;
}

if (isset($_POST["selesai"])) {
    $G = $_POST["pertanyaan"];
    if ($G[1] and $G[2] and $G[3] and $G[4] and $G[5] and $G[6]) {
        echo "PANLEUKOPENIA <br>";
    } elseif ($G[1] and $G[2] and $G[7]) {
        echo "VIRAL RHINOTRACEITIS <br>";
    } elseif ($G[1] and $G[2] and $G[8] and $G[9] and $G[10] and $G[11] and $G[12]) {
        echo "CALCIVIRUS <br>";
    } elseif ($G[1] and $G[2] and $G[13] and $G[14]) {
        echo "CHLAMYDIOSIS <br>";
    } elseif ($G[1] and $G[2] and $G[15] and $G[16] and $G[17] and $G[18]) {
        echo "RABIES <br>";
    } elseif ($G[1] and $G[2] and $G[19] and $G[20] and $G[21]) {
        echo "KENCING BATU <br>";
    } elseif ($G[1] and $G[2] and $G[31] and $G[32]) {
        echo "AMBIEN <br>";
    } elseif ($G[1] and $G[2] and $G[33] and $G[34] and $G[35] and $G[36] and $G[37]) {
        echo "TUMOR <br>";
    } elseif ($G[1] and $G[2] and $G[39] and $G[40]) {
        echo "OTITIS <br>";
    } elseif ($G[29] and $G[2] and $G[26] and $G[27] and $G[28]) {
        echo "ASETIS <br>";
    } elseif ($G[2] and $G[29] and $G[30]) {
        echo "INFEKSI RAHIM <br>";
    } elseif ($G[2] and $G[38]) {
        echo "HALITOSIS <br>";
    } elseif ($G[22] and $G[23] and $G[24]) {
        echo "JAMUR PADA KUCING <br>";
    } elseif ($G[22] and $G[23]) {
        echo "SCABIES <br>";
    }
}
?>

<html>

<head>
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
                </div><br>
                <button type="submit" name="selesai">SELESAI</button>
            </form>
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
</script>

</html>