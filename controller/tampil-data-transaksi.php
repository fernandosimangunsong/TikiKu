<?php

	echo "<h1> Aplikasi Tikiku </h1>";

	include('db.php');
	$bdd = new db(); 

	$User = $bdd->getOne('SELECT namaPegawai, alamatPegawai FROM pegawaiTikiku WHERE idPegawai = "23516301" '); 

	$KodeProvinsi =$bdd->getOne('SELECT kodeProvinsi FROM provinsi WHERE namaProvinsi = "ACEH" '); 
	echo $KodeProvinsi['kodeProvinsi'].'<br>'; 
	

	include("person.php");
	$ucong = new Person();
	$tutur = new Person();

	$ucong->setName("fernando maruli tua ");
	$tutur->setName("tutur arif simangunsong");

	echo $ucong->getName();
	echo $tutur->getName();