<?php
	class Pegawai{

		public function __construct(){
			$this->database = new PDO('mysql:host=localhost;dbname=dbTikiku','root','');
		}	

		public function tampilDataPegawai(){
			$sql = "SELECT * FROM pegawaiTikiku";
			$query = $this->database->query($sql);
			return $query;
		}

		public function addNewPegawai($nip, $namaPegawai, $alamatPegawai, $password){
			$sql = "INSERT INTO pegawaiTikiku (nip, namaPegawai, alamatPegawai, password) VALUES('$nip', '$namaPegawai', '$alamatPegawai', '$password')";
			$query = $this->database->query($sql);
			
			if(!$query){
				return "Failed";
			}else{
				return "Success";
			}
		}
	

		public function editDataPegawai($nip){
			$sql = "SELECT * FROM pegawaiTikiku WHERE nip='$nip'";
			$query = $this->database->query($sql);
			return $query;
		}


		public function updateDataPegawai($namaPegawai, $alamatPegawai){
			$sql = "UPDATE pegawaiTikiku SET namaPegawai='$namaPegawai', alamatPegawai='$alamatPegawai' WHERE nip='$nip'";
			$query = $this->db->query($sql);
			if(!$query){
				return "Failed";
			}else{
			 return "Success";
			}
		}

		public function changePassword($nip, $password){
			$sql = "UPDATE pegawaiTikiku SET password='$password' WHERE nip='$nip'";
			$query = $this->database->query($sql);
			if(!$query){
				return "Failed";
			}else{
			 return "Success";
			}
		}


		public function deleteAccountPegawai($nip){
			$sql = "DELETE FROM pegawaiTikiku WHERE nip='$nip'";
			$query = $this->database->query($sql);
			if(!$query){
				return "Failed";
			}else{
			 return "Success";
			}
		}


	}
