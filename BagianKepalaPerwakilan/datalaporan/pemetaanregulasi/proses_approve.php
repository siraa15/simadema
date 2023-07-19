<?php

include "../../../config/koneksi.php";

$id_pemetaanregulasi = $_GET['id_pemetaanregulasi'];

$approve = $db->query("UPDATE formpemetaanregulasi SET statusapprove='approved',
tanggaldisetujui=DATE_FORMAT(NOW(), '%Y-%m-%d')
 WHERE id_pemetaanregulasi='$id_pemetaanregulasi'");

if(!$approve){
    echo "Ada Masalah Penyimpanan data = $db->error";
  }
  else{
   echo "<script>location.href='../../tampil.php?page=data_pemetaanregulasi'</script>";
  }

?>