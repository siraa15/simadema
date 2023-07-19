<section class="content" style="margin-top: 9px;">
    <div class="card">
      <div class="card-body">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah User</h3>
            <div class="card-tools"  >
           
            </div>
          </div>
         
           
          <form action="?page=pengguna_simpan" method="POST" class="form-horizontal" >
             
          <div class="card-body">
          <div class="form-group row">
                <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" >
                </div>
              </div>   
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan E-mail" >
                </div>
              </div>  
              <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password" >
                </div>
              </div>        

            <div class="form-group row">
                <label for="level" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-3 ml-4">

                <div class="form-group">
                  <select name="level" class="form-control">
                    <option>Admin</option>
                    <option>Kepala Perwakilan</option>
                    <option>Asisten Muda</option>
                    <option>Asisten Pratama</option>
                    </select>
                  </div>

                </div>
              </div>
              <div class="form-group row">
                <label for="penyetuju" class="col-sm-2 col-form-label">Penyetuju</label>
                <div class="col-sm-10  ">
                  <input type="text" class="form-control" id="penyetuju" name="penyetuju" placeholder="Masukkan Nama Penyetuju" >
                </div>
              </div> 
              <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan Penyetuju</label>
                <div class="col-sm-3 ml-4">

                <div class="form-group">
                  <select name="jabatan" class="form-control">
                    <option>Kepala Perwakilan Ombudsman RI Perwakilan Provinsi Kalimantan Selatan</option>
                    <option>Kepala Keasistenan Pencegahan Maladministrasi</option>
                    <option>-</option>
                    </select>
                  </div>

              
            </div> <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">Simpan</button>
            </div> 
          </form> 
        </div> <!-- /.card -->

      </div>
