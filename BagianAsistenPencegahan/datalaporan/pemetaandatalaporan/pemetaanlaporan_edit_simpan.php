<?php
include '../config/koneksi.php';
    $db->query("
    UPDATE `formpemetaanlaporan` SET
    `tema` = '$_POST[tema]', 
    `latarbelakang` = '$_POST[latarbelakang]', 
    `pemetaandatalaporan` = '$_POST[pemetaandatalaporan]',
    `hasilpemetaandatalaporan` = '$_POST[hasilpemetaandatalaporan]',
    `statusapprove`='wait kasisten'
    WHERE `formpemetaanlaporan`.`id_pemetaanlaporan` = '$_POST[id_pemetaanlaporan]';
    ");
    if(!$db)
    echo "Ada Masalah Penyimpanan data = $db->error";
  else

  echo "<script>location.href='tampil.php?page=pemetaandatalaporan'</script>";
    ?>