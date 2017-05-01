<?php

	include_once 'db.php';
	include_once 'header.php';

	$bdd = new db(); 
	$User = $bdd->getOne('SELECT namaPegawai, alamatPegawai FROM pegawaiTikiku WHERE idPegawai = "23516301" '); 
	
?>

<div class="clearfix"></div>


<div class="clearfix"></div><br />

<div class="container">
    <?php  include_once 'form-transaksi-kirim-barang.php' ; ?>
       
</div>

<?php include_once 'footer.php'; ?>
