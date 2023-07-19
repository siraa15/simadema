<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$db->query("
DELETE FROM formpemetaaninformasi WHERE id_pemetaaninformasi =$id")or die(mysqli_error($db));
if(!$db)
  echo "Ada Masalah Hapus data = $db->error";
else

  echo "<script>location.href='tampil.php?page=data_pemetaaninformasi'</script>";
?>