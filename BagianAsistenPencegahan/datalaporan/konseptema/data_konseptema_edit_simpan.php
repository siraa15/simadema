<?php
include '../config/koneksi.php';
    $db->query("
    UPDATE `formkonseptema` SET
    `tema` = '$_POST[tema]', 
    `abstraksi` = '$_POST[abstraksi]', 
    `alur` = '$_POST[alur]',
    `statusapprove`='wait kasisten'
  
    WHERE `formkonseptema`.`id_konseptema` = '$_POST[id_konseptema]';
    ");
    if(!$db)
    echo "Ada Masalah Penyimpanan data = $db->error";
  else

    echo "<script>location.href='tampil.php?page=data_konseptema_pm'</script>";
    ?>