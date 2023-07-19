<?php

include "../../../config/koneksi.php";

$id_pemetaanhasil = $_GET['id_pemetaanhasil'];

$approve = $db->query("UPDATE formpemetaanhasil SET statusapprove='approved',
tanggaldisetujui=DATE_FORMAT(NOW(), '%Y-%m-%d')
 WHERE id_pemetaanhasil='$id_pemetaanhasil'");

if(!$approve){
    echo "Ada Masalah Penyimpanan data = $db->error";
  }
  else{
   echo "<script>location.href='../../tampil.php?page=data_pemetaanhasil'</script>";
  }

?>