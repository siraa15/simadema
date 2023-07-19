<?php
      include '../config/koneksi.php';
    $hasil = $db->query("
    select * from formpemetaanlaporan JOIN substansi ON formpemetaanlaporan.id_substansi=substansi.id_substansi where id_pemetaanlaporan = $_GET[id]") or die(mysqli_error($db));

    if(!$hasil)
      echo "ada masalah ".$db->error;
    $d = $hasil->fetch_assoc();
?>
<section class="content" style="margin-top: 9px;">
    <div class="card">
      <div class="card-body">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Pemetaan Data Laporan</h3>
            <div class="card-tools"  >
            </div>
          </div>
         
           
          <form action="?page=pemetaanlaporan_edit_simpan" method="POST" class="form-horizontal" >
            
          <div class="card-body" id=konseptema>
            <input type="hidden" name="tanggaldisusun" id="tanggaldisusun" value="<?php echo date("Y-m-d"); ?>">
            <div class="form-group row">
                <label for="substansi" class="col-sm-2 col-form-label">Substansi</label>
                <div class="col-sm-9 ml-4">

                <div class="form-group">
                <input type="text" class="form-control" id="id_substansi" value="<?php echo $d['jenis_substansi'] ?>" readonly >
                  </div>

                </div>
              </div>
              <input type="hidden" name="id_pemetaanlaporan" value="<?php echo $d['id_pemetaanlaporan'] ?>">
              <div class="form-group row">
                <label for="tema" class="col-sm-2 col-form-label">Tema</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tema" name="tema" value="<?php echo $d['tema'] ?>">
                </div>
              </div>                            


              <div class="form-group row">
                <label for="latarbelakang" class="col-sm-2 col-form-label">Latar Belakang</label>
                <div class="col-sm-10">
                <textarea id="latarbelakang" name="latarbelakang"><?php echo $d['latarbelakang'] ?></textarea>
                <script language=javascript>
                CKEDITOR.replace( 'latarbelakang' );
              </script>
              </div>
                </div>
                <style>.ck.ck-content{height: 25vh;}</style>
              <div class="form-group row">
                <label for="pemetaandatalaporan" class="col-sm-2 col-form-label">Pemetaan Data Laporan</label>
                <div class="col-sm-10">
                <textarea id="pemetaandatalaporan" name="pemetaandatalaporan"><?php echo $d['pemetaandatalaporan'] ?></textarea>
                      <script type="text/javascript">
                       CKEDITOR.replace( 'pemetaandatalaporan' );

                    </script>
                </div>
              </div>
              <style>.ck.ck-content{height: 25vh;}</style>
              <div class="form-group row">
                <label for="hasilpemetaandatalaporan" class="col-sm-2 col-form-label">Hasil Pemetaan Data Laporan</label>
                <div class="col-sm-10">
                <textarea id="hasilpemetaandatalaporan" name="hasilpemetaandatalaporan"><?php echo $d['hasilpemetaandatalaporan'] ?></textarea>
                      <script type="text/javascript">
                       CKEDITOR.replace( 'hasilpemetaandatalaporan' );

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
