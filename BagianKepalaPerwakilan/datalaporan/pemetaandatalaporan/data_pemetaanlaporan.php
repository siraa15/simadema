<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Data Laporan Pemetaan Data Laporan</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-body">
        
					<table id="pemetaandata" class="table table-striped table-bordered">
            <thead>
						<tr>
							<th>No</th><th>Tanggal Disusun</th><th>Nama Penyusun</th><th>Jenis Substansi</th><th>Tema</th><th>Aksi</th><th>Approve</th>
						</tr></thead>
            <tbody>
						<?php
				   	
				   	$hasil = $db->query("
             SELECT * FROM formpemetaanlaporan
             JOIN substansi ON formpemetaanlaporan.id_substansi=substansi.id_substansi join user 
             on user.iduser=formpemetaanlaporan.iduser where level='Asisten Muda'");
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
                <a href=../cetak/cetak_pemetaandatalaporan.php?id=$d[id_pemetaanlaporan] target=__blank>
                <i class='fas fa-eye'>Lihat</i></a>
              </td>
              <td>
              ";
            if($d['statusapprove']=="wait kaper"){
              echo "<a href='datalaporan/pemetaandatalaporan/proses_approve.php?id_pemetaanlaporan=$d[id_pemetaanlaporan]' class='btn btn-danger' onclick = \" return confirm('Yakin Approve Data Ini'); \"><i class='fas fa-clock'></i></a>";
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
              $('#pemetaandata').DataTable();
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