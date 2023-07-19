<?php
include '../config/koneksi.php';
$pass=md5($_POST['password']);
    $db->query("
    UPDATE `user` SET
    `nama_lengkap` = '$_POST[nama_lengkap]', 
    `email` = '$_POST[email]',
    `password` = '$pass',
    `level` = '$_POST[level]',
    `penyetuju` = '$_POST[penyetuju]',
    `jabatan` = '$_POST[jabatan]'
    WHERE `user`.`iduser` = '$_POST[iduser]';
    ");
    if(!$db)
    echo "Ada Masalah Penyimpanan data = $db->error";
  else

  echo "<script>location.href='tampil.php?page=pengguna'</script>";
    ?>