<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$db->query("
DELETE FROM formpemetaanhasil WHERE id_pemetaanhasil =$id")or die(mysqli_error($db));
if(!$db)
  echo "Ada Masalah Hapus data = $db->error";
else

  echo "<script>location.href='tampil.php?page=data_pemetaanhasil'</script>";
?>