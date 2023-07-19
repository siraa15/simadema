<?php 
if(empty($_SESSION['email']) || empty($_SESSION['password']) )
{
	echo "Maaf, anda harus login.";
}
else
{
?>
<?php
      include '../config/koneksi.php';
    $iduser = $_SESSION['iduser'];
    $hasil = $db->query("
    select * from user where iduser=$iduser" ) or die(mysqli_error($db));

    if(!$hasil)
      echo "ada masalah ".$db->error;
    $d = $hasil->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web</title>
  <link rel="stylesheet" href="../adminlte3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../adminlte3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../adminlte3/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../adminlte3/dist/css/adminlte.min.css">
  <!--<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
  <script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>-->
  <script src="../ckeditor/ckeditor.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://ombudsman.go.id" class="brand-link">
      <img src="../img/simadema2.png" alt="SIMADEMA LOGO" width=200  class="ml-3 " >
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <?php
      ?>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <i class="fas fa-user elevation-2 mt-2" ></i>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $d['nama_lengkap'] ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item ml-1">
            <a href="?page=home" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p><b>Home</b>
        
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon 	far fa-file-alt"></i>
              <p><b>Data Masuk</b>
              
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=data_konseptema_pm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Konsep Tema PM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=pemetaandatalaporan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemetaan Data Laporan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=data_pemetaanisu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemetaan Isu Pelayanan Publik</p>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="?page=data_pemetaanhasil" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemetaan Hasil Penelitian Akademik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=data_pemetaanregulasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemetaan Regulasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=data_pemetaaninformasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemetaan Informasi</p>
                </a>
              </li>

            </ul>
          </li>
       

          <li class="nav-item">
            <a href="tampil.php?page=logout" onclick="return confirm('Apakah anda yakin ingin keluar ?')" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<?php 
} 
?>