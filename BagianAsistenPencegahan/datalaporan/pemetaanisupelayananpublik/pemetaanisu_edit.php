<?php
      include '../config/koneksi.php';
    $hasil = $db->query("
    select * from formpemetaanisupelayananpublik JOIN substansi ON formpemetaanisupelayananpublik.id_substansi=substansi.id_substansi where id_pemetaanisu = $_GET[id]") or die(mysqli_error($db));

    if(!$hasil)
      echo "ada masalah ".$db->error;
    $d = $hasil->fetch_assoc();
?>
<section class="content" style="margin-top: 9px;">
    <div class="card">
      <div class="card-body">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Pemetaan Isu Pelayanan Publik</h3>
            <div class="card-tools"  >
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#konseptema" aria-expanded="false" aria-controls="konseptema">
            <i class="fas fa-minus"></i>
          </button>
            </div>
          </div>
         
           
          <form action="?page=pemetaanisu_edit_simpan" method="POST" class="form-horizontal" >
            <div class="card-body" id=konseptema>
            <input type="hidden" name="tanggaldisusun" id="tanggaldisusun" value="<?php echo date("Y-m-d"); ?>">
            <div class="form-group row">
                <label for="substansi" class="col-sm-2 col-form-label">Substansi</label>
                <div class="col-sm-10">
                <input type="hidden" name="id_pemetaanisu" value="<?php echo $d['id_pemetaanisu'] ?>">
                <div class="form-group">
                <input type="text" class="form-control" id="id_substansi" value="<?php echo $d['jenis_substansi'] ?>" readonly >
                  </div>
                </div>
              </div>
              
              <div class="form-group row">
                <label for="tema" class="col-sm-2 col-form-label">Tema</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tema" name="tema" value="<?php echo $d['tema'] ?>" >
                </div>
              </div>                            

              <style>.ck.ck-content{height: 25vh;}</style>
              <div class="form-group row">
                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-10">
                <textarea id="isi" name="isi"><?php echo $d['isi'] ?></textarea>
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
