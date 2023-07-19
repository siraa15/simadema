<?php
include '../config/koneksi.php';
    $db->query("
    UPDATE `formpemetaanhasil` SET
    `tema` = '$_POST[tema]', 
    `isi` = '$_POST[isi]',
    `statusapprove`='wait kaper'
    WHERE `formpemetaanhasil`.`id_pemetaanhasil` = '$_POST[id_pemetaanhasil]';
    ");
    if(!$db)
    echo "Ada Masalah Penyimpanan data = $db->error";
  else

 echo "<script>location.href='tampil.php?page=data_pemetaanhasil'</script>";
    ?>