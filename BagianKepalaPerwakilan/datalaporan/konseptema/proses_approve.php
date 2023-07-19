<?php

include "../../../config/koneksi.php";

$id_konseptema = $_GET['id_konseptema'];

$approve = $db->query("UPDATE formkonseptema SET statusapprove='approved',
tanggaldisetujui=DATE_FORMAT(NOW(), '%Y-%m-%d') WHERE id_konseptema='$id_konseptema'");

if(!$approve){
    echo "Ada Masalah Penyimpanan data = $db->error";
  }
  else{
   echo "<script>location.href='../../tampil.php?page=data_konseptema_pm'</script>";
  }

?>