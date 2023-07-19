<?php 
if(empty($_SESSION['email']) || empty($_SESSION['password']) )
{
  echo "<script language='javascript'> 
            alert('Anda Harus Login!');
			document.location='../Admin/tampil.php?page=logout'
        	</script>";
}
else
{
	echo '<div class="content-wrapper">';
	include '../config/koneksi.php';
	
	if($_GET['page']=='home')
	{
    include 'home/home.php'
	?>
  
    
  <?php
  }
  else if($_GET['page']=='pengguna')
  {	
    include 'pengguna/pengguna.php';
  }
  else if($_GET['page']=='pengguna_tambah')
  {	
    include 'pengguna/pengguna_tambah.php';
  }
  else if($_GET['page']=='pengguna_simpan')
  {	
    include 'pengguna/pengguna_simpan.php';
  }
  else if($_GET['page']=='pengguna_edit')
  {	
    include 'pengguna/pengguna_edit.php';
  }
  else if($_GET['page']=='pengguna_edit_simpan')
  {	
    include 'pengguna/pengguna_edit_simpan.php';
  }
  else if($_GET['page']=='pengguna_hapus')
  {	
    include 'pengguna/pengguna_hapus.php';
  }
  else if($_GET['page']=='logout')
  {	
    include 'logout/logout.php';
  }

echo "</div>";
}

?>