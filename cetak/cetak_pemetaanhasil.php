<!DOCTYPE html>
<html>
<head>
<?php
	include '../config/koneksi.php';
	?>
	<title>Format Pemetaan Hasil Penelitian Akademik</title>
	<style type="text/css">
		body{
			font-family: 'arial', sans-serif;
		}
		table {
			border-width: 1px;
			border-collapse: collapse;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}


	</style>
</head>
<body style="word-break: break-all" onload="window.print()">
<font face="arial"</font>
	<center>
		<table border="0">
			<tr>
				<td><img src="../img/lambang.png" width="150" height="100"></td>
				<td>
					<p align="center"><b><font size=4> OMBUDSMAN REPUBLIK INDONESIA </font><br>
					<font size=3>PERWAKILAN PROVINSI KALIMANTAN SELATAN </font><br>
					<font size=2>KEASISTENAN PENCEGAHAN MALADMINISTRASI PERWAKILAN</font><br>
					</b>
					Jalan Letjen. S. Parman Nomor 57, Kota Banjarmasin 70116 <br>
							Telepon (0511) 3367412, Faksimili (0511) 3367411
							
				</td>
			</tr>
			</table>
		<!-- <table width="625"> -->
			<table width="200">
			<tr>
				<!-- <td>KONSEP TEMA PENCEGAHAN MALADMINISTRASI</td> -->

				<td class="text2" >Kode :</td>

			</tr>
		</table>
		<table width="625">
			<tr>
				<td>
					<br>
					<p align="center"><b><font face="Arial" size="2.5"> PEMETAAN HASIL PENELITIAN AKADEMIK </font></b></p> 
				</td>
			
			</tr>
			<tr>
				<!-- <td>Perihal</td> -->
			
		</table>
		<br>
		<table width="600">
		<?php
			$id=$_GET['id'];
			$query = mysqli_query($db,"SELECT * FROM formpemetaanhasil join substansi on formpemetaanhasil.id_substansi=substansi.id_substansi join user on formpemetaanhasil.iduser=user.iduser WHERE id_pemetaanhasil='$id'")or die(mysqli_error($db));
			while($data = mysqli_fetch_array($query)){ 
			
		?>
			<tr>
		       <td>
			   <table>
					<tbody>
					<tr><td  width="80"><font size=2>Substansi</font></td><td width="10">:</td><td><font size=2><?php echo $data['jenis_substansi'] ?></font></td></tr>
					<tr><td><font size=2>Tema/Judul</font></td><td>:</td><td><br><font size=2><?php echo $data['tema'] ?></font></td></tr>
					</tbody></table>
		       </td>
		    </tr>
		</table>
		<br>
		<table align="center"  width="600" > 
		<tr> <td>  <?php echo $data['isi'] ?></td> </tr>
				   </table>
			<br>
		<table width="600">
		<?php
		function tanggal_indo($tanggal)
{
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
			$split = explode('-', $tanggal);
			return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
		}

			?>
			<tr>
				<td>Ditetapkan di Banjarmasin</td>
				
			</tr>
			<tr>
			<td > <?php
				   if($data['statusapprove']=="approved"){
                	echo "Pada Tanggal ".tanggal_indo($data['tanggaldisetujui']);
					
              }else{
                	echo"Pada Tanggal";
              }
			  ?></td>
			</tr>
		</table>
		<table width="600">
			<tr>
		       <td align="left" width="350">
		       	Disusun oleh,
		       	<br><br><br><br><br><br><?php echo $data['nama_lengkap'] ?>
		       	<br><?php echo $data['level']?>
		       </td>
		       <td align="left" width="210">
				   <br>
		       	Menyetujui,
		       	<br><br><br><br><br><br> <?php
				   if($data['statusapprove']=="approved"){
                	echo$data['penyetuju'];?> <br> <?php
					echo $data['jabatan'];
              }else{
                	echo"";
              }
			  ?>
		       </td>
		    </tr>
		</table>
		<br>
		<?php } ?>
	</center>
</body>
</html>