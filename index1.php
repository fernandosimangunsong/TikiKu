<?php
	
	
	include "controller/PegawaiController.php";
	
	$pegawai = new PegawaiController();
	
	if(isset($_GET['i'])){ 
		$pegawai->tampilDataPegawai();
	}
	else if (isset($_GET['regpegawai'])) {
		$pegawai->viewFormTambahPegawai();
	}
	else{
		$pegawai->tampilDataPegawai();
	}
	
?>

