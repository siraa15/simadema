<?php
$iduser = $_SESSION['iduser'];
$pass=md5($_POST['password']);
    $hasil = $db->query("INSERT INTO user
    VALUES ('','$_POST[nama_lengkap]','$_POST[email]','$pass','$_POST[level]','$_POST[penyetuju]','$_POST[jabatan]')")or die(mysqli_error($db));
    if(!$hasil){
      echo "Ada Masalah Penyimpanan data = $db->error";
    }
    else{
     echo "<script>location.href='tampil.php?page=pengguna'</script>";
    } 
    ?>