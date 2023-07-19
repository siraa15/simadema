<?php 
if(empty($_SESSION['email']) || empty($_SESSION['password']) )
{
	echo "Maaf, anda harus login.";
}
else
{
  
	echo '<div class="content-wrapper">';
	include '../config/koneksi.php';
  if($_GET['page']=='home')
	{
    include 'home/home.php';
  ?>
  <?php
  //PROSES KONSEP TEMA PM ATAS
  }
  else if($_GET['page']=='konseptema_tambah')
  {
    include 'datalaporan/konseptema/formkonseptema.php';
  }
  else if($_GET['page']=='formkonseptema_simpan')
  {
   include 'datalaporan/konseptema/formkonseptema_simpan.php';
  }
  else if($_GET['page']=='data_konseptema_pm')
  {
    include 'datalaporan/konseptema/data_konseptema_pm.php';
  }
  else if($_GET['page']=='data_konseptema_edit')
  {
    include 'datalaporan/konseptema/data_konseptema_edit.php'
    ?>
    <?php
  }
  else if($_GET['page']=='data_konseptema_edit_simpan')
  {
   include 'datalaporan/konseptema/data_konseptema_edit_simpan.php';
  }
  else if($_GET['page']=='data_konseptema_hapus')
    //----------------------------------------------------------    
    { 
        include 'datalaporan/konseptema/data_konseptema_hapus.php';
    }
    else if($_GET['page']=='logout')
    //----------------------------------------------------------    
    { 
        include 'logout/logout.php';
          
    }
     //PROSES KONSEP TEMA PM BAWAH
     //PROSES PEMETAAN DATA LAPORAN ATAS
    else if($_GET['page']=='pemetaandatalaporan')  
    { 
        include 'datalaporan/pemetaandatalaporan/data_pemetaanlaporan.php';
          
    }
    else if($_GET['page']=='pemetaan_tambah')
    { 
        include 'datalaporan/pemetaandatalaporan/pemetaan_tambah.php';
          
    }
    else if($_GET['page']=='pemetaan_simpan')
    { 
        include 'datalaporan/pemetaandatalaporan/pemetaan_simpan.php';
          
    }
    else if($_GET['page']=='pemetaanlaporan_edit')
    { 
        include 'datalaporan/pemetaandatalaporan/pemetaanlaporan_edit.php';
          
    }
    else if($_GET['page']=='pemetaanlaporan_edit_simpan')
    { 
        include 'datalaporan/pemetaandatalaporan/pemetaanlaporan_edit_simpan.php';
          
    }
    else if($_GET['page']=='pemetaanlaporan_hapus')
    { 
        include 'datalaporan/pemetaandatalaporan/pemetaanlaporan_hapus.php';
          
    }
    //PROSES PEMETAAN DATA LAPORAN BAWAH
    
     //PROSES PEMETAAN ISU PELAAN PUBLIK ATAS
     else if($_GET['page']=='data_pemetaanisu')
     { 
         include 'datalaporan/pemetaanisupelayananpublik/data_pemetaanisu.php';
           
     }
     else if($_GET['page']=='pemetaanisu_tambah')
     { 
         include 'datalaporan/pemetaanisupelayananpublik/pemetaanisu_tambah.php';
           
     }
     else if($_GET['page']=='pemetaanisu_simpan')
     { 
         include 'datalaporan/pemetaanisupelayananpublik/pemetaanisu_simpan.php';
           
     }
     else if($_GET['page']=='pemetaanisu_edit')
     { 
         include 'datalaporan/pemetaanisupelayananpublik/pemetaanisu_edit.php';
           
     }
     else if($_GET['page']=='pemetaanisu_edit_simpan')
     { 
         include 'datalaporan/pemetaanisupelayananpublik/pemetaanisu_edit_simpan.php';
           
     }
     else if($_GET['page']=='pemetaanisu_hapus')
     { 
         include 'datalaporan/pemetaanisupelayananpublik/pemetaanisu_hapus.php';
           
     }
      //PROSES PEMETAAN ISU PELAAN PUBLIK BAWAH
       //PROSES Pemetaan HASIL ATAS
    else if($_GET['page']=='data_pemetaanhasil')
    { 
        include 'datalaporan/pemetaanhasil/data_pemetaanhasil.php';
          
    }
    else if($_GET['page']=='pemetaanhasil_tambah')
    { 
        include 'datalaporan/pemetaanhasil/pemetaanhasil_tambah.php';
          
    }
    else if($_GET['page']=='pemetaanhasil_simpan')
    { 
        include 'datalaporan/pemetaanhasil/pemetaanhasil_simpan.php';
          
    }
    else if($_GET['page']=='pemetaanhasil_edit')
    { 
        include 'datalaporan/pemetaanhasil/pemetaanhasil_edit.php';
          
    }
    else if($_GET['page']=='pemetaanhasil_edit_simpan')
    { 
        include 'datalaporan/pemetaanhasil/pemetaanhasil_edit_simpan.php';
          
    }
    else if($_GET['page']=='pemetaanhasil_hapus')
    { 
        include 'datalaporan/pemetaanhasil/pemetaanhasil_hapus.php';
          
    }
     //PROSES pemetaan HASIL BAWAH
      //PROSES Pemetaan regulasi ATAS
    else if($_GET['page']=='data_pemetaanregulasi')
    { 
        include 'datalaporan/pemetaanregulasi/data_pemetaanregulasi.php';
          
    }
    else if($_GET['page']=='pemetaanregulasi_tambah')
    { 
        include 'datalaporan/pemetaanregulasi/pemetaanregulasi_tambah.php';
          
    }
    else if($_GET['page']=='pemetaanregulasi_simpan')
    { 
        include 'datalaporan/pemetaanregulasi/pemetaanregulasi_simpan.php';
          
    }
    else if($_GET['page']=='pemetaanregulasi_edit')
    { 
        include 'datalaporan/pemetaanregulasi/pemetaanregulasi_edit.php';
          
    }
    else if($_GET['page']=='pemetaanregulasi_edit_simpan')
    { 
        include 'datalaporan/pemetaanregulasi/pemetaanregulasi_edit_simpan.php';
          
    }
    else if($_GET['page']=='pemetaanregulasi_hapus')
    { 
        include 'datalaporan/pemetaanregulasi/pemetaanregulasi_hapus.php';
          
    }
     //PROSES pemetaan regulasi BAWAH
      //PROSES Pemetaan informasi ATAS
      else if($_GET['page']=='data_pemetaaninformasi')
      { 
          include 'datalaporan/pemetaaninformasi/data_pemetaaninformasi.php';
            
      }
      else if($_GET['page']=='pemetaaninformasi_tambah')
      { 
          include 'datalaporan/pemetaaninformasi/pemetaaninformasi_tambah.php';
            
      }
      else if($_GET['page']=='pemetaaninformasi_simpan')
      { 
          include 'datalaporan/pemetaaninformasi/pemetaaninformasi_simpan.php';
            
      }
      else if($_GET['page']=='pemetaaninformasi_edit')
      { 
          include 'datalaporan/pemetaaninformasi/pemetaaninformasi_edit.php';
            
      }
      else if($_GET['page']=='pemetaaninformasi_edit_simpan')
      { 
          include 'datalaporan/pemetaaninformasi/pemetaaninformasi_edit_simpan.php';
            
      }
      else if($_GET['page']=='pemetaaninformasi_hapus')
      { 
          include 'datalaporan/pemetaaninformasi/pemetaaninformasi_hapus.php';
            
      }
       //PROSES KOMPILASI HASIL BAWAH
    ?>
   <?php
    
 
  echo "</div>";

}

?>
 
  
 