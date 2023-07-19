<section class="content" style="margin-top: 9px;">
    <div class="card">
      <div class="card-body">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Pemetaan Hasil Penelitian Akademik</h3>
            <div class="card-tools"  >
            
            </div>
          </div>
         
           
          <form action="?page=pemetaanhasil_simpan" method="POST" class="form-horizontal" >
            <div class="card-body" id=konseptema>
            <input type="hidden" name="tanggaldisusun" id="tanggaldisusun" value="<?php echo date("Y-m-d"); ?>">
            <div class="form-group row">
                <label for="substansi" class="col-sm-2 col-form-label">Substansi</label>
                <div class="col-sm-9 ml-4">

                <div class="form-group">
                  <select name="id_substansi" class="form-control">
                  <?php
											$hasil = $db->query("select * from substansi");

												if(!$hasil)
													echo "ada masalah ".$db->error;
												
												while( $d = $hasil->fetch_assoc() )
												{
													echo "<option value=$d[id_substansi] >$d[jenis_substansi]</option>";
												}
                    ?>	
                    </select>
                  </div>

                </div>
              </div>
              
              <div class="form-group row">
                <label for="tema" class="col-sm-2 col-form-label">Tema</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tema" name="tema" placeholder="Masukkan Tema" >
                </div>
              </div>                            

              <style>.ck.ck-content{height: 25vh;}</style>
              <div class="form-group row">
                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-10">
                <textarea id="isi" name="isi"></textarea>
                <script language=javascript>
                CKEDITOR.replace( 'isi' );
              </script>
              </div>
                </div>
                

              </div>

            </div> <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">Simpan</button>
            </div> 
          </form>
        </div> <!-- /.card -->

      </div>
