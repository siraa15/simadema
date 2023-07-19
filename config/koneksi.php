<?php

	$db = new mysqli("localhost","root","","db_pkl");
	if($db->connect_errno > 0)
		echo "Ada Masalah dengan database atau koneksi";
	

?>	