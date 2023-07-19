<?php

include "../../../config/koneksi.php";

$id_pemetaanlaporan = $_GET['id_pemetaanlaporan'];

$approve = $db->query("UPDATE formpemetaanlaporan SET statusapprove='approved',
tanggaldisetujui=DATE_FORMAT(NOW(), '%Y-%m-%d')
 WHERE id_pemetaanlaporan='$id_pemetaanlaporan'");

if(!$approve){
    echo "Ada Masalah Penyimpanan data = $db->error";
  }
  else{
   echo "<script>location.href='../../tampil.php?page=datamasuk_pemetaandatalaporan'</script>";
  }

?>