<?php

include "../../../config/koneksi.php";

$id_pemetaanisu = $_GET['id_pemetaanisu'];

$approve = $db->query("UPDATE formpemetaanisupelayananpublik SET statusapprove='approved',
tanggaldisetujui=DATE_FORMAT(NOW(), '%Y-%m-%d')
 WHERE id_pemetaanisu='$id_pemetaanisu'");

if(!$approve){
    echo "Ada Masalah Penyimpanan data = $db->error";
  }
  else{
   echo "<script>location.href='../../tampil.php?page=datamasuk_pemetaanisu'</script>";
  }

?>