<?php
$iduser = $_SESSION['iduser'];
    $tanggal = date("Y-m-d");
    $status_approve = "wait kaper";
    $hasil = $db->query("INSERT INTO formkonseptema
    VALUES ('','$iduser','$_POST[id_substansi]','$_POST[tema]','$_POST[tanggaldisusun]','$_POST[abstraksi]','$_POST[alur]','$status_approve','')")or die(mysqli_error($db));
    if(!$hasil){
      echo "Ada Masalah Penyimpanan data = $db->error";
    }
    else{
     echo "<script>location.href='tampil.php?page=data_konseptema_pm'</script>";
    } 
    ?>