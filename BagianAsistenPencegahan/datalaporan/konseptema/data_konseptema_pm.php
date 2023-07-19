<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- data tables -->
  <link rel="stylesheet" href="../../../adminlte3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../adminlte3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

</head>
<body>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Data Laporan Konsep Tema Pencegahan Maladministrasi</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-body">
        <a href="?page=konseptema_tambah" class="btn btn-primary btn-sm"
					 		style="margin-bottom: 7px;">Tambah Data</a>	
					<table id="datatables" name="datatables"class="table table-striped table-bordered">
            <thead>
						<tr>
							<th>No</th><th>Tanggal Disusun</th><th>Nama Penyusun</th><th>Jenis Substansi</th><th>Tema</th><th>Aksi</th><th>Status Approve</th>
						</tr></thead>
            <tbody>
						<?php
            $iduser = $_SESSION['iduser'];
				   	$hasil = $db->query("
             SELECT * FROM formkonseptema
             JOIN substansi ON formkonseptema.id_substansi=substansi.id_substansi join user on user.iduser=formkonseptema.iduser where user.iduser=$iduser");
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
						if(!$hasil)
            echo "ada masalah ".$db->error;
            $no = 0; //variabel no untuk nomor urutnya.

						while( $d = $hasil->fetch_assoc() )
						{
              $no++;
							echo "
							<tr>
								<td>$no</td>
								<td>"; echo tanggal_indo($d['tanggaldisusun']); echo "</td>
                <td>$d[nama_lengkap]</td>
								<td>$d[jenis_substansi]</td>
								<td>$d[tema]</td>
                <td> 
                <a href=?page=data_konseptema_edit&id=$d[id_konseptema]> 
										<i class='fas fa-pencil-alt'></i></a>
                <a href=?page=data_konseptema_hapus&id=$d[id_konseptema] 
									  onclick = \" return confirm('Yakin Hapus Data Ini'); \"> 
										<i class='fas fa-trash-alt'></i> </a>
                <a href=../cetak/cetak_konseptema.php?id=$d[id_konseptema] target=__blank>
                <i class='fas fa-print'></i></a>
                <a href=../download/cetak_konseptema.php?id=$d[id_konseptema]>
                <i class='fas fa-download'></i></a>
              </td>
              <td>
                ";
              if($d['statusapprove']=="wait kasisten"){
                echo "<button class='btn btn-danger'><i class='fas fa-clock'></i></button>";
              }else{
                echo "<button class='btn btn-success'><i class='fas fa-check'></i></button>";
              }
                echo "
              </td>
							</tr>";
						}
						?>
            </tbody>
          
					</table>

          <script>
              $(document).ready(function(){
                  $('#datatables').DataTable();
              });
          </script>
				</div> <!-- /.card-body -->
      	<div class="card-footer">
        Sistem Deteksi Pencegahan Maladministrasi
      	</div>  
		  <!-- /.card-footer-->
    	</div> 
		<!-- /.card -->
    </section>
    <!-- /.content -->
  <!--batas--> 
</body>

</html>