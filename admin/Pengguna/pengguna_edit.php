<?php
      include '../config/koneksi.php';
    $hasil = $db->query("
    select * from user where iduser = $_GET[id]") or die(mysqli_error($db));

    if(!$hasil)
      echo "ada masalah ".$db->error;
    $d = $hasil->fetch_assoc();
?>
<section class="content" style="margin-top: 9px;">
    <div class="card">
      <div class="card-body">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah User</h3>
            <div class="card-tools"  >
           
            </div>
          </div>
         
           
          <form action="?page=pengguna_edit_simpan" method="POST" class="form-horizontal" >
             
          <div class="card-body">
          <div class="form-group row">
                <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $d['nama_lengkap'] ?>" >
                </div>
              </div>   
              <input type="hidden" name="iduser" value="<?php echo $d['iduser'] ?>">
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $d['email'] ?>" >
                </div>
              </div>  
              <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password" value="<?php echo $d['password'] ?>" >
                </div>
              </div>   
              <?php
    $hasil = $db->query("
    select * from user where iduser = $_GET[id]") or die(mysqli_error($db));

    if(!$hasil)
      echo "ada masalah ".$db->error;
    $d = $hasil->fetch_assoc();
?>
               
            <div class="form-group row">
                <label for="level" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-3 ml-4">

                <div class="form-group">
                  <select name="level" id="level" class="form-control" value="<?php echo $d['level'] ?>">
                  <option><?php echo $d['level'] ?></option>
                    <option>Admin</option>
                    <option>Kepala Perwakilan</option>
                    <option>Asisten Muda</option>
                    <option>Asisten Pratama</option>
                    </select>
                  </div>
           
                </div>
              </div>
              <div class="form-group row">
                <label for="penyetuju" class="col-sm-2 col-form-label">Penyutuju</label>
                <div class="col-sm-10  ">
                  <input type="text" class="form-control" id="penyetuju" name="penyetuju" value="<?php echo $d['penyetuju'] ?>">
                </div>
              </div> 
              <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan Penyetuju</label>
                <div class="col-sm-3 ml-4  ">
                <div class="form-group">
                  <select name="jabatan" class="form-control">
                    <option><?php echo $d['jabatan'] ?></option>
                    <option>Kepala Perwakilan Ombudsman RI Perwakilan Provinsi Kalimantan Selatan</option>
                    <option>Kepala Keasistenan Pencegahan Maladministrasi</option>
                    </select>
                </div>
              </div>     
              
            </div> <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">Simpan</button>
            </div> 
          </form> 
        </div> <!-- /.card -->

      </div>
