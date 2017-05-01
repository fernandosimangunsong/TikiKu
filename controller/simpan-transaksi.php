<?php

include('db.php');
$bdd = new db(); 
$query = $bdd->execute('INSERT INTO pegawaiTikiku (idPegawai, namaPegawai, alamatPegawai, password) VALUES ("0800626", "ucong", "Medan","12345")');