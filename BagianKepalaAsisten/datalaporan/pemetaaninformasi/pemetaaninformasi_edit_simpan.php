<?php
include '../config/koneksi.php';
    $db->query("
    UPDATE `formpemetaaninformasi` SET
    `tema` = '$_POST[tema]', 
    `isi` = '$_POST[isi]',
    `statusapprove`='wait kaper'
    WHERE `formpemetaaninformasi`.`id_pemetaaninformasi` = '$_POST[id_pemetaaninformasi]';
    ");
    if(!$db)
    echo "Ada Masalah Penyimpanan data = $db->error";
  else

  echo "<script>location.href='tampil.php?page=data_pemetaaninformasi'</script>";
    ?>