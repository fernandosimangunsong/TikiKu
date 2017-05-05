<?php

include('../model/database.php');
$bdd = new database(); 
$nip = "0800627";
$query = $bdd->execute('INSERT INTO pegawaiTikiku (nip, namaPegawai, alamatPegawai, password) VALUES ('.$nip.', "ucong", "Medan","12345")');