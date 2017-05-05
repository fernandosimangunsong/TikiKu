<?php
   
    include "model/Pegawai.php";
    
    class PegawaiController{
        
        public $pegawai;
        
        
        function __construct(){
            $this->pegawai = new Pegawai(); 
        }
        
        function tampilDataPegawai(){
            $datapegawai = $this->pegawai->tampilDataPegawai(); 
            include "view/tampilDataPegawai.php"; 
        }

        function viewFormTambahPegawai(){
            include "view/formTambahPegawai.php";
        }

        function insertDataPegawai(){
            $nip = $_POST['nip'];
            $nama = $_POST['nama'];
            $angkatan = $_POST['alamat'];
            $password = $_POST['password'];
 
            $insert = $this->pegawai->addNewPegawai($nip, $nama, $angkatan, $password);

            
        }

        function __destruct(){
        }
    }
?>