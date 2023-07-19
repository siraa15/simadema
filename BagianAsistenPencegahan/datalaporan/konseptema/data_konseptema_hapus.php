<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$db->query("
DELETE FROM formkonseptema WHERE id_konseptema =$id")or die(mysqli_error($db));
if(!$db)
  echo "Ada Masalah Hapus data = $db->error";
else

  echo "<script>location.href='tampil.php?page=data_konseptema_pm'</script>";
?>