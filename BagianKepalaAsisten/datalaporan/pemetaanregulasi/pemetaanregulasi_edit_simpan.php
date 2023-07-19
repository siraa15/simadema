<?php
include '../config/koneksi.php';
    $db->query("
    UPDATE `formpemetaanregulasi` SET
    `tema` = '$_POST[tema]', 
    `isi` = '$_POST[isi]',
    `statusapprove`='wait kaper'
    WHERE `formpemetaanregulasi`.`id_pemetaanregulasi` = '$_POST[id_pemetaanregulasi]';
    ");
    if(!$db)
    echo "Ada Masalah Penyimpanan data = $db->error";
  else

 echo "<script>location.href='tampil.php?page=data_pemetaanregulasi'</script>";
    ?>