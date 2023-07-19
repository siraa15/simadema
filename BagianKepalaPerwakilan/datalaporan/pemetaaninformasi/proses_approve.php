<?php

include "../../../config/koneksi.php";

$id_pemetaaninformasi = $_GET['id_pemetaaninformasi'];

$approve = $db->query("UPDATE formpemetaaninformasi SET statusapprove='approved',
tanggaldisetujui=DATE_FORMAT(NOW(), '%Y-%m-%d')
 WHERE id_pemetaaninformasi='$id_pemetaaninformasi'");

if(!$approve){
    echo "Ada Masalah Penyimpanan data = $db->error";
  }
  else{
   echo "<script>location.href='../../tampil.php?page=data_pemetaaninformasi'</script>";
  }

?>