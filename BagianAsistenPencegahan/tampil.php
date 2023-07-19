<?php 
session_start();
if(empty($_SESSION['email']) || empty($_SESSION['password']) )
{
	echo "<script language='javascript'> 
	alert('Anda Harus Login!');
	document.location='../login/loginpkl.php'
	</script>";
}
else
{
?>
	<?php include 'menu.php'; ?>
	<?php include 'kerja.php'; ?>
	<?php include 'footer.php'; ?>
	
<?php 
}
?>