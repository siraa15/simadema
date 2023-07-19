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
            <h1>Data User</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-body">
        <a href="?page=pengguna_tambah" class="btn btn-primary btn-sm"
					 		style="margin-bottom: 7px;">Tambah User</a>	
					<table id="datatables" name="datatables"class="table table-striped table-bordered">
            <thead>
						<tr>
							<th>No</th><th>Nama Lengkap</th><th>E-mail</th><th>Jabatan</th><th>Aksi</th>
						</tr></thead>
            <tbody>
						<?php
				   	$hasil = $db->query("
             SELECT * FROM user
            ");
						if(!$hasil)
            echo "ada masalah ".$db->error;
            $no = 0; //variabel no untuk nomor urutnya.

						while( $d = $hasil->fetch_assoc() )
						{
              $no++;
							echo "
							<tr>
								<td>$no</td>
								<td>$d[nama_lengkap]</td>
                <td>$d[email]</td>
								<td>$d[level]</td>
                <td> 
                <a href=?page=pengguna_edit&id=$d[iduser]> 
                <i class='fas fa-pencil-alt'></i> </a>
                <a href=?page=pengguna_hapus&id=$d[iduser] 
									  onclick = \" return confirm('Yakin Hapus Data Ini'); \"> 
										<i class='fas fa-trash-alt'></i> </a>
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
