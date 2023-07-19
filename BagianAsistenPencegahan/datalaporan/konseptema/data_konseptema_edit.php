<?php
      include '../config/koneksi.php';
    $hasil = $db->query("
    select * from formkonseptema JOIN substansi ON formkonseptema.id_substansi=substansi.id_substansi where id_konseptema = $_GET[id]") or die(mysqli_error($db));

    if(!$hasil)
      echo "ada masalah ".$db->error;
    $d = $hasil->fetch_assoc();
?>
<section class="content" style="margin-top: 9px;">
    <div class="card">
      <div class="card-body">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Konsep Tema Pencegahan Maladministrasi</h3>
            <div class="card-tools"  >
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#konseptema" aria-expanded="false" aria-controls="konseptema">
            <i class="fas fa-minus"></i>
          </button>
            </div>
          </div>
         
           
          <form action="?page=data_konseptema_edit_simpan" method="POST" class="form-horizontal" >
            <!-- query menampilkan data terakhir ditambahkan -->
            <!--<?php 
           // $terakhir = mysqli_query($db,"SELECT * FROM kasuspencegahan JOIN substansi ON kasuspencegahan.id_substansi=substansi.id_substansi ORDER BY no_kasus DESC LIMIT 1")or die(mysqli_error($db));
            //$dataterakhir = mysqli_fetch_array($terakhir);

            ?>-->
            <div class="card-body" id=konseptema>
            <input type="hidden" name="tanggaldisusun" id="tanggaldisusun" value="<?php echo $d['tanggaldisusun']; ?>">
              <div class="form-group row">
                <label for="substansi" class="col-sm-2 col-form-label">Substansi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="id_substansi" value="<?php echo $d['jenis_substansi'] ?>" readonly >

                  <input type="hidden" name="id_konseptema" value="<?php echo $d['id_konseptema'] ?>">

                </div>
              </div>            
              <div class="form-group row">
                <label for="tema" class="col-sm-2 col-form-label">Tema</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tema" name="tema" value="<?php echo $d['tema'] ?>" placeholder="Masukkan Tema" >
                </div>
              </div>                            

              <div class="form-group row">
                <label for="abstraksi" class="col-sm-2 col-form-label">Abstraksi</label>
                <div class="col-sm-10">
                <textarea id="abstraksi" name="abstraksi" >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $d['abstraksi'] ?></textarea>
                <script language=javascript>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'abstraksi' );
              </script>
              </div>
                </div>
                <style>.ck.ck-content{height: 25vh;}</style>
              <div class="form-group row">
                <label for="alur" class="col-sm-2 col-form-label">Alur</label>
                <div class="col-sm-10">
                <textarea id="alur" name="alur" >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $d['alur'] ?></textarea>
                      <script type="text/javascript">
                       CKEDITOR.replace( 'alur' );

                    </script>
                </div>
              </div>

              </div>
            <input type=hidden id=statusapprove name=statusapprove value="<?php echo $d['statusapprove']?>">
            </div> <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">Simpan</button>
            </div> 
          </form>
        </div> <!-- /.card -->

      </div>
