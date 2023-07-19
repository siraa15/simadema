<?php
include '../config/koneksi.php';
$pass=md5($_POST['password']);
	$hasil = $db->query("
		select * from user where email = '$_POST[email]'
		");

	if(!$hasil)
		echo "ada masalah ".$db->error;

    $d = $hasil->fetch_assoc();
    if($d['password']==$pass)
	{
		//Username Pass Benar
		$level = $d['level'];
		if($level=="Asisten Muda"){
			session_start();
			$_SESSION['iduser']=$d['iduser'];
			$_SESSION['email']=$d['email'];
			$_SESSION['password']=$pass;
			echo "<script language='javascript'> 
            alert('Anda Berhasil Login!');
			document.location='../BagianKepalaAsisten/tampil.php?page=home&id=$d[iduser]'
        	</script>";
		
		}
		else if($level=="Kepala Perwakilan"){
			session_start();
			$_SESSION['iduser']=$d['iduser'];
			$_SESSION['email']=$d['email'];
			$_SESSION['password']=$pass;
			echo "<script language='javascript'> 
            alert('Anda Berhasil Login!');
			document.location='../BagianKepalaPerwakilan/tampil.php?page=home'
        	</script>";
		}
		else if($level=="Asisten Pratama"){
			session_start();
			$_SESSION['iduser']=$d['iduser'];
			$_SESSION['email']=$d['email'];
			$_SESSION['password']=$pass;
			echo "<script language='javascript'> 
			alert('Anda Berhasil Login!');
			document.location='../BagianAsistenPencegahan/tampil.php?page=home'
			</script>";
		}
		
		else if($level=="Admin"){
			session_start();
			$_SESSION['iduser']=$d['iduser'];
			$_SESSION['email']=$d['email'];
			$_SESSION['password']=$pass;
			echo "<script language='javascript'> 
			alert('Anda Berhasil Login!');
			document.location='../Admin/tampil.php?page=home'
			</script>";
		}
	}

	
	else
	{
		//Username Pass Salah
		echo "<script language='javascript'> 
            alert('Password atau Email Anda Salah');
			document.location='loginpkl.php'
        	</script>";
?>	
<?php
	}
    ?>