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
  else if($_GET['page']=='data_konseptema_pm')
  {
    include 'datalaporan/konseptema/data_konseptema_pm.php';
    }
    else if($_GET['page']=='logout')
    //----------------------------------------------------------    
    { 
        include 'logout/logout.php';
          
    }
    
    //PROSES KONSEP TEMA PM BAWAH

    //PROSES PEMETAAN DATA LAPORAN ATAS
    else if($_GET['page']=='pemetaandatalaporan')
    //----------------------------------------------------------    
    { 
        include 'datalaporan/pemetaandatalaporan/data_pemetaanlaporan.php';
          
    }
    else if($_GET['page']=='data_pemetaanisu')
    //----------------------------------------------------------    
    { 
        include 'datalaporan/pemetaanisupelayananpublik/data_pemetaanisu.php';
          
    }
    else if($_GET['page']=='data_pemetaaninformasi')
    //----------------------------------------------------------    
    { 
        include 'datalaporan/pemetaaninformasi/data_pemetaaninformasi.php';
    }
    else if($_GET['page']=='data_pemetaanhasil')
    //----------------------------------------------------------    
    { 
        include 'datalaporan/pemetaanhasil/data_pemetaanhasil.php';
    }
    else if($_GET['page']=='data_pemetaanregulasi')
    //----------------------------------------------------------    
    { 
        include 'datalaporan/pemetaanregulasi/data_pemetaanregulasi.php';
    }
    ?>
    

   <?php
    
  //PROSES KONSEP TEMA PM ATAS
  echo "</div>";

}

?>
 
  
 