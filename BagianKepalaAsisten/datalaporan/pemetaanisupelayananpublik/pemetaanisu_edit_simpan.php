<?php
include '../config/koneksi.php';
    $db->query("
    UPDATE `formpemetaanisupelayananpublik` SET
    `tema` = '$_POST[tema]', 
    `isi` = '$_POST[isi]',
    `statusapprove`='wait kaper'
    WHERE `formpemetaanisupelayananpublik`.`id_pemetaanisu` = '$_POST[id_pemetaanisu]';
    ");
    if(!$db)
    echo "Ada Masalah Penyimpanan data = $db->error";
  else

  echo "<script>location.href='tampil.php?page=data_pemetaanisu'</script>";
    ?>