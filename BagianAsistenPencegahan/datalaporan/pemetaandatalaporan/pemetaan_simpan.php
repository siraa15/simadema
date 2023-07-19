<?php
$iduser = $_SESSION['iduser'];
    $tanggal = date("Y-m-d");
    $status_approve = "wait kasisten";
    $hasil = $db->query("INSERT INTO formpemetaanlaporan
    VALUES ('','$iduser','$_POST[id_substansi]','$_POST[tema]','$_POST[tanggaldisusun]','$_POST[latarbelakang]','$_POST[pemetaandatalaporan]','$_POST[hasilpemetaandatalaporan]','$status_approve','')")or die(mysqli_error($db));
    if(!$hasil){
      echo "Ada Masalah Penyimpanan data = $db->error";
    }
    else{
     echo "<script>location.href='tampil.php?page=pemetaandatalaporan'</script>";
    } 
    ?>